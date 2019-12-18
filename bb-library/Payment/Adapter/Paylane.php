<?php
/**
 * BoxBilling
 *
 * @copyright BoxBilling, Inc (http://www.boxbilling.com)
 * @license   Apache-2.0
 *
 * Copyright BoxBilling, Inc
 * This source file is subject to the Apache-2.0 License that is bundled
 * with this source code in the file LICENSE
 */

class Payment_Adapter_Paylane implements \Box\InjectionAwareInterface
{
    private $config = array();

    protected $di;

    public function setDi($di)
    {
        $this->di = $di;
    }

    public function getDi()
    {
        return $this->di;
    }

    public function __construct($config)
    {
        $this->config = $config;

        if (!function_exists('curl_exec')) {
            throw new Payment_Exception('PHP Curl extension must be enabled in order to use PayPal gateway');
        }

        if (!isset($this->config['email'])) {
            throw new Payment_Exception('Payment gateway "PayPal" is not configured properly. Please update configuration parameter "PayPal Email address" at "Configuration -> Payments".');
        }
    }

    public static function getConfig()
    {
        return array(
            'supports_one_time_payments' => true,
            'supports_subscriptions' => true,
            'description' => 'Enter your PayPal email to start accepting payments by PayPal.',
            'form' => array(
                'email' => array('text', array(
                    'label' => 'PayPal email address for payments',
                    'validators' => array('EmailAddress'),
                ),
                ),
            ),
        );
    }

    public function getHtml($api_admin, $invoice_id, $subscription)
    {
        $invoice = $api_admin->invoice_get(array('id' => $invoice_id));

        $data = array();
        if ($subscription) {
            $data = $this->getSubscriptionFields($invoice);
        } else {
            $data = $this->getOneTimePaymentFields($invoice);
        }

        $url = $this->serviceUrl();
        return $this->_generateForm($url, $data);
    }

    public function processTransaction($api_admin, $id, $data, $gateway_id)
    {
        file_put_contents('debug.log', json_encode('paylane processTransaction', JSON_PRETTY_PRINT), FILE_APPEND);

        $checkValid = 0;
//
        if (APPLICATION_ENV != 'testing' && !$this->_isIpnValid($data)) {
            throw new Payment_Exception('IPN is not valid');
        }
        file_put_contents('debug.log', json_encode('get request', JSON_PRETTY_PRINT), FILE_APPEND);
        file_put_contents('debug.log', json_encode($_REQUEST, JSON_PRETTY_PRINT), FILE_APPEND);
//
        $ipn = $data['post'];
        file_put_contents('debug.log', json_encode('get ipn', JSON_PRETTY_PRINT), FILE_APPEND);
        file_put_contents('debug.log', json_encode($ipn, JSON_PRETTY_PRINT), FILE_APPEND);


        $tx = $api_admin->invoice_transaction_get(array('id' => $id));

        file_put_contents('debug.log', json_encode('get tx', JSON_PRETTY_PRINT), FILE_APPEND);
        file_put_contents('debug.log', json_encode($tx, JSON_PRETTY_PRINT), FILE_APPEND);

        if (!$tx['invoice_id']) {
            $api_admin->invoice_transaction_update(array('id' => $id, 'invoice_id' => $data['get']['bb_invoice_id']));
        }

        if (!$tx['type'] && isset($ipn['txn_type'])) {
            $api_admin->invoice_transaction_update(array('id' => $id, 'type' => $ipn['txn_type']));
        }

        if (!$tx['txn_id'] && isset($ipn['id_sale'])) {
            $api_admin->invoice_transaction_update(array('id' => $id, 'txn_id' => $ipn['id_sale']));
            $checkValid++;
        }

        if (!$tx['txn_status'] && isset($ipn['status'])) {
            $api_admin->invoice_transaction_update(array('id' => $id, 'txn_status' => $ipn['status']));
            $checkValid++;
        }

        if (!$tx['amount'] && isset($ipn['amount'])) {
            $api_admin->invoice_transaction_update(array('id' => $id, 'amount' => $ipn['amount']));
            $checkValid++;
        }

        if (!$tx['currency'] && isset($ipn['currency'])) {
            $api_admin->invoice_transaction_update(array('id' => $id, 'currency' => $ipn['currency']));
            $checkValid++;
        }

        $invoice = $api_admin->invoice_get(array('id' => $data['get']['bb_invoice_id']));
        $client_id = $invoice['client']['id'];

        file_put_contents('debug.log', json_encode('check valid', JSON_PRETTY_PRINT), FILE_APPEND);
        file_put_contents('debug.log', json_encode($checkValid, JSON_PRETTY_PRINT), FILE_APPEND);

        if ($checkValid >= 4) {
            $bd = array(
                'id' => $client_id,
                'amount' => $ipn['amount'],
                'description' => 'Paylane transaction ' . $ipn['id_sale'],
                'type' => 'Paylane',
                'rel_id' => $ipn['id_sale'],
            );
            if ($this->isIpnDuplicate($ipn)) {
                throw new Payment_Exception('IPN is duplicate');
            }
            $api_admin->client_balance_add_funds($bd);
            if ($tx['invoice_id']) {
                $api_admin->invoice_pay_with_credits(array('id' => $tx['invoice_id']));
            }
            $api_admin->invoice_batch_pay_with_credits(array('client_id' => $client_id));
        }

//        switch ($ipn['txn_type']) {
//
//            case 'web_accept':
//            case 'subscr_payment':
//
//                if ($ipn['payment_status'] == 'Completed') {
//                    $bd = array(
//                        'id' => $client_id,
//                        'amount' => $ipn['mc_gross'],
//                        'description' => 'PayPal transaction ' . $ipn['txn_id'],
//                        'type' => 'PayPal',
//                        'rel_id' => $ipn['txn_id'],
//                    );
//                    if ($this->isIpnDuplicate($ipn)) {
//                        throw new Payment_Exception('IPN is duplicate');
//                    }
//                    $api_admin->client_balance_add_funds($bd);
//                    if ($tx['invoice_id']) {
//                        $api_admin->invoice_pay_with_credits(array('id' => $tx['invoice_id']));
//                    }
//                    $api_admin->invoice_batch_pay_with_credits(array('client_id' => $client_id));
//                }
//
//                break;
//
//            case 'subscr_signup':
//                $sd = array(
//                    'client_id' => $client_id,
//                    'gateway_id' => $gateway_id,
//                    'currency' => $ipn['mc_currency'],
//                    'sid' => $ipn['subscr_id'],
//                    'status' => 'active',
//                    'period' => str_replace(' ', '', $ipn['period3']),
//                    'amount' => $ipn['amount3'],
//                    'rel_type' => 'invoice',
//                    'rel_id' => $invoice['id'],
//                );
//                $api_admin->invoice_subscription_create($sd);
//
//                $t = array(
//                    'id' => $id,
//                    's_id' => $sd['sid'],
//                    's_period' => $sd['period'],
//                );
//                $api_admin->invoice_transaction_update($t);
//                break;
//
//            case 'recurring_payment_suspended_due_to_max_failed_payment':
//            case 'subscr_failed':
//            case 'subscr_eot':
//            case 'subscr_cancel':
//                $s = $api_admin->invoice_subscription_get(array('sid' => $ipn['subscr_id']));
//                $api_admin->invoice_subscription_update(array('id' => $s['id'], 'status' => 'canceled'));
//                break;
//
//            default:
//                error_log('Unknown paypal transaction ' . $id);
//                break;
//        }
//
//        if (isset($ipn['payment_status']) && $ipn['payment_status'] == 'Refunded') {
//            $refd = array(
//                'id' => $invoice['id'],
//                'note' => 'PayPal refund ' . $ipn['parent_txn_id'],
//            );
//            $api_admin->invoice_refund($refd);
//        }

        $d = array(
            'id' => $id,
            'error' => '',
            'error_code' => '',
            'status' => 'processed',
            'updated_at' => date('Y-m-d H:i:s'),
        );
        $api_admin->invoice_transaction_update($d);
        file_put_contents('debug.log', json_encode('finish paylane processTransaction', JSON_PRETTY_PRINT), FILE_APPEND);

    }

    private function serviceUrl()
    {
        if ($this->config['test_mode']) {
            return 'https://www.sandbox.paypal.com/cgi-bin/webscr';
        } else {
            return 'https://www.paypal.com/cgi-bin/webscr';
        }
    }

    private function _isIpnValid($data)
    {
        // use http_raw_post_data instead of post due to encoding
        parse_str($data['http_raw_post_data'], $post);
        $req = 'cmd=_notify-validate';
        foreach ((array)$post as $key => $value) {
            $value = urlencode(stripslashes($value));
            $req .= "&$key=$value";
        }
        $url = $this->serviceUrl();
        $ret = $this->download($url, $req);
        return $ret == 'VERIFIED';
    }

    private function moneyFormat($amount, $currency)
    {
        //HUF currency do not accept decimal values
        if ($currency == 'HUF') {
            return number_format($amount, 0);
        }
        return number_format($amount, 2, '.', '');
    }

    /**
     * @param string $url
     */
    private function download($url, $post_vars = false, $phd = array(), $contentType = 'application/x-www-form-urlencoded')
    {
        $post_contents = '';
        if ($post_vars) {
            if (is_array($post_vars)) {
                foreach ($post_vars as $key => $val) {
                    $post_contents .= ($post_contents ? '&' : '') . urlencode($key) . '=' . urlencode($val);
                }
            } else {
                $post_contents = $post_vars;
            }
        }

        $uinf = parse_url($url);
        $host = $uinf['host'];
        $path = $uinf['path'];
        $path .= (isset($uinf['query']) && $uinf['query']) ? ('?' . $uinf['query']) : '';

        $headers = Array(
            ($post_contents ? 'POST' : 'GET') . " $path HTTP/1.1",
            "Host: $host",
            'Connection: Close',
            'User-Agent: BoxBilling'
        );
        if (!empty($phd)) {
            if (!is_array($phd)) {
                $headers[count($headers)] = $phd;
            } else {
                $next = count($headers);
                $count = count($phd);
                for ($i = 0; $i < $count; $i++) {
                    $headers[$next + $i] = $phd[$i];
                }
            }
        }
        if ($post_contents) {
            $headers[] = "Content-Type: $contentType";
            $headers[] = 'Content-Length: ' . strlen($post_contents);
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 600);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // Apply the XML to our curl call
        if ($post_contents) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post_contents);
        }

        $data = curl_exec($ch);
        if (curl_errno($ch)) return false;
        curl_close($ch);

        return $data;
    }

    /**
     * @param string $url
     */
    private function _generateForm($url, $data, $method = 'post')
    {
        $form = '';
        $salt = 'WRo4*WRo5^pra7#S';
        $description = 'TR001';
        $amount = $data['a3'];
        file_put_contents('logpushdata.log', json_encode($data, 128));
        $currency = $data['currency_code'];
        $transaction_type = 'S';
        $merchant_id = '85f55494467986f6c26304f781e72d79';
        $hash = sha1($salt . "|" . $description . "|" . $amount . "|" . $currency . "|" . $transaction_type);
        $form = '<form action="https://secure.paylane.com/order/cart.html" method="post">
            <input type="hidden" name="amount" value="'.$amount.'" />
            <input type="hidden" name="currency" value="'.$currency.'" />
            <input type="hidden" name="merchant_id" value="'.$merchant_id.'" />
            <input type="hidden" name="description" value="'.$description.'" />
            <input type="hidden" name="transaction_description" value="Product 1 transaction" />
            <input type="hidden" name="transaction_type" value="'.$transaction_type.'" />
            <input type="hidden" name="back_url" value="'.$data['notify_url'].'" />
            <input type="hidden" name="language" value="en" />
            <input type="hidden" name="hash" value="'.$hash.'" />
        
            <button type="submit">Pay with PayLane</button>
        </form>';

        return $form;
    }

    /**
     * @param string $txn_id
     */
    public function isIpnDuplicate(array $ipn)
    {
        $sql = 'SELECT id
                FROM transaction
                WHERE txn_id = :transaction_id
                  AND txn_status = :transaction_status
                  AND type = :transaction_type
                  AND amount = :transaction_amount
                LIMIT 2';

        $bindings = array(
            ':transaction_id' => $ipn['txn_id'],
            ':transaction_status' => $ipn['payment_status'],
            ':transaction_type' => $ipn['txn_type'],
            ':transaction_amount' => $ipn['mc_gross'],
        );

        $rows = $this->di['db']->getAll($sql, $bindings);
        if (count($rows) > 1) {
            return true;
        }


        return false;
    }

    public function getInvoiceTitle(array $invoice)
    {
        $p = array(
            ':id' => sprintf('%05s', $invoice['nr']),
            ':serie' => $invoice['serie'],
            ':title' => $invoice['lines'][0]['title']
        );
        return __('Payment for invoice :serie:id [:title]', $p);
    }

    public function getSubscriptionFields(array $invoice)
    {
        $data = array();
        $subs = $invoice['subscription'];

        $data['item_name'] = $this->getInvoiceTitle($invoice);
        $data['item_number'] = $invoice['nr'];
        $data['no_shipping'] = '1';
        $data['no_note'] = '1'; // Do not prompt payers to include a note with their payments. Allowable values for Subscribe buttons:
        $data['currency_code'] = $invoice['currency'];
        $data['return'] = $this->config['return_url'];
        $data['cancel_return'] = $this->config['cancel_url'];
        $data['notify_url'] = $this->config['notify_url'];
        $data['business'] = $this->config['email'];

        $data['cmd'] = '_xclick-subscriptions';
        $data['rm'] = '2';

        $data['invoice_id'] = $invoice['id'];

        // Recurrence info
        $data['a3'] = $this->moneyFormat($invoice['total'], $invoice['currency']); // Regular subscription price.
        $data['p3'] = $subs['cycle']; //Subscription duration. Specify an integer value in the allowable range for the units of duration that you specify with t3.

        /**
         * t3: Regular subscription units of duration. Allowable values:
         *  D – for days; allowable range for p3 is 1 to 90
         *  W – for weeks; allowable range for p3 is 1 to 52
         *  M – for months; allowable range for p3 is 1 to 24
         *  Y – for years; allowable range for p3 is 1 to 5
         */
        $data['t3'] = $subs['unit'];

        $data['src'] = 1; //Recurring payments. Subscription payments recur unless subscribers cancel their subscriptions before the end of the current billing cycle or you limit the number of times that payments recur with the value that you specify for srt.
        $data['sra'] = 1; //Reattempt on failure. If a recurring payment fails, PayPal attempts to collect the payment two more times before canceling the subscription.
        $data['charset'] = 'UTF-8'; //Sets the character encoding for the billing information/log-in page, for the information you send to PayPal in your HTML button code, and for the information that PayPal returns to you as a result of checkout processes initiated by the payment button. The default is based on the character encoding settings in your account profile.

        //client data
        $buyer = $invoice['buyer'];
        $data['address1'] = $buyer['address'];
        $data['city'] = $buyer['city'];
        $data['email'] = $buyer['email'];
        $data['first_name'] = $buyer['first_name'];
        $data['last_name'] = $buyer['last_name'];
        $data['zip'] = $buyer['zip'];
        $data['state'] = $buyer['state'];
        $data['bn'] = "BoxBilling_SP";
        return $data;
    }

    public function getOneTimePaymentFields(array $invoice)
    {
        $data = array();
        $data['item_name'] = $this->getInvoiceTitle($invoice);
        $data['item_number'] = $invoice['nr'];
        $data['no_shipping'] = '1';
        $data['no_note'] = '1';
        $data['currency_code'] = $invoice['currency'];
        $data['rm'] = '2';
        $data['return'] = $this->config['return_url'];
        $data['cancel_return'] = $this->config['cancel_url'];
        $data['notify_url'] = $this->config['notify_url'];
        $data['business'] = $this->config['email'];
        $data['cmd'] = '_xclick';
        $data['amount'] = $this->moneyFormat($invoice['subtotal'], $invoice['currency']);
        $data['tax'] = $this->moneyFormat($invoice['tax'], $invoice['currency']);
        $data['bn'] = "BoxBilling_SP";
        $data['charset'] = "utf-8";
        return $data;
    }


//    ------------------------------------------------------------------------------------------------------------------------------------------------------------

    /**
     * @var string
     */
    protected $api_url = 'https://direct.paylane.com/rest/';
    /**
     * @var string
     */
    protected $username = '85f55494467986f6c26304f781e72d79', $password = 'THU8!kI1#cli0%LA';
    /**
     * @var array
     */
    protected $http_errors = array
    (
        400 => '400 Bad Request',
        401 => '401 Unauthorized',
        500 => '500 Internal Server Error',
        501 => '501 Not Implemented',
        502 => '502 Bad Gateway',
        503 => '503 Service Unavailable',
        504 => '504 Gateway Timeout',
    );
    /**
     * @var bool
     */
    protected $is_success = false;
    /**
     * @var array
     */
    protected $allowed_request_methods = array(
        'get',
        'put',
        'post',
        'delete',
    );
    /**
     * @var boolean
     */
    protected $ssl_verify = true;
    /**
     * Constructor
     *
     * @param string $username Username
     * @param string $password Password
     */
    /**
     * Set Api URL
     *
     * @param string $url Api URL
     */
    public function setUrl($url)
    {
        $this->api_url = $url;
    }

    /**
     * Sets SSL verify
     *
     * @param bool $ssl_verify SSL verify
     */
    public function setSSLverify($ssl_verify)
    {
        $this->ssl_verify = $ssl_verify;
    }

    /**
     * Request state getter
     *
     * @return bool
     */
    public function isSuccess()
    {
        return $this->is_success;
    }

    /**
     * Performs card sale
     *
     * @param array $params Sale Params
     * @return array
     */
    public function cardSale($params)
    {
        return $this->call(
            'cards/sale',
            'post',
            $params
        );
    }

    /**
     * Performs card sale by token
     *
     * @param array $params Sale Params
     * @return array
     */
    public function cardSaleByToken($params)
    {
        return $this->call(
            'cards/saleByToken',
            'post',
            $params
        );
    }

    /**
     * Card authorization
     *
     * @param array $params Authorization params
     * @return array
     */
    public function cardAuthorization($params)
    {
        return $this->call(
            'cards/authorization',
            'post',
            $params
        );
    }

    /**
     * Card authorization by token
     *
     * @param array $params Authorization params
     * @return array
     */
    public function cardAuthorizationByToken($params)
    {
        return $this->call(
            'cards/authorizationByToken',
            'post',
            $params
        );
    }

    /**
     * PayPal authorization
     *
     * @param $params
     * @return array
     */
    public function paypalAuthorization($params)
    {
        return $this->call(
            'paypal/authorization',
            'post',
            $params
        );
    }

    /**
     * Performs capture from authorized card
     *
     * @param array $params Capture authorization params
     * @return array
     */
    public function captureAuthorization($params)
    {
        return $this->call(
            'authorizations/capture',
            'post',
            $params
        );
    }

    /**
     * Performs closing of card authorization, basing on authorization card ID
     *
     * @param array $params Close authorization params
     * @return array
     */
    public function closeAuthorization($params)
    {
        return $this->call(
            'authorizations/close',
            'post',
            $params
        );
    }

    /**
     * Performs refund
     *
     * @param array $params Refund params
     * @return array
     */
    public function refund($params)
    {
        return $this->call(
            'refunds',
            'post',
            $params
        );
    }

    /**
     * Get sale info
     *
     * @param array $params Get sale info params
     * @return array
     */
    public function getSaleInfo($params)
    {
        return $this->call(
            'sales/info',
            'get',
            $params
        );
    }

    /**
     * Get sale authorization info
     *
     * @param array $params Get sale authorization info params
     * @return array
     */
    public function getAuthorizationInfo($params)
    {
        return $this->call(
            'authorizations/info',
            'get',
            $params
        );
    }

    /**
     * Performs sale status check
     *
     * @param array $params Check sale status
     * @return array
     */
    public function checkSaleStatus($params)
    {
        return $this->call(
            'sales/status',
            'get',
            $params
        );
    }

    /**
     * Direct debit sale
     *
     * @param array $params Direct debit params
     * @return array
     */
    public function directDebitSale($params)
    {
        return $this->call(
            'directdebits/sale',
            'post',
            $params
        );
    }

    /**
     * Sofort sale
     *
     * @param array $params Sofort params
     * @return array
     */
    public function sofortSale($params)
    {
        return $this->call(
            'sofort/sale',
            'post',
            $params
        );
    }

    /**
     * iDeal sale
     *
     * @param $params iDeal transaction params
     * @return array
     */
    public function idealSale($params)
    {
        return $this->call(
            'ideal/sale',
            'post',
            $params
        );
    }

    /**
     * iDeal banks list
     *
     * @return array
     */
    public function idealBankCodes()
    {
        return $this->call(
            'ideal/bankcodes',
            'get',
            array()
        );
    }

    /**
     * Bank transfer sale
     *
     * @param array $params Bank transfer sale params
     * @return array
     */
    public function bankTransferSale($params)
    {
        return $this->call(
            'banktransfers/sale',
            'post',
            $params
        );
    }

    /**
     * PayPal sale
     *
     * @param array $params Paypal sale params
     * @return array
     */
    public function paypalSale($params)
    {
        return $this->call(
            'paypal/sale',
            'post',
            $params
        );
    }

    /**
     * Cancels Paypal recurring profile
     *
     * @param array $params Paypal params
     * @return array
     */
    public function paypalStopRecurring($params)
    {
        return $this->call('paypal/stopRecurring',
            'post',
            $params
        );
    }

    /**
     *  Performs resale by sale ID
     *
     * @param array $params Resale by sale params
     * @return array
     */
    public function resaleBySale($params)
    {
        return $this->call(
            'resales/sale',
            'post',
            $params
        );
    }

    /**
     * Performs resale by authorization ID
     *
     * @param array $params Resale by authorization params
     * @return array
     */
    public function resaleByAuthorization($params)
    {
        return $this->call(
            'resales/authorization',
            'post',
            $params
        );
    }

    /**
     * Checks if a card is enrolled in the 3D-Secure program.
     *
     * @param array $params Is card 3d secure params
     * @return array
     */
    public function checkCard3DSecure($params)
    {
        return $this->call(
            '3DSecure/checkCard',
            'get',
            $params
        );
    }

    /**
     * Checks if a card is enrolled in the 3D-Secure program, based on the card's token.
     *
     * @param array $params Is card 3d secure params
     * @return array
     */
    public function checkCard3DSecureByToken($params)
    {
        return $this->call(
            '3DSecure/checkCardByToken',
            'get',
            $params
        );
    }

    /**
     * Performs card authorization by ID 3d secure authorization
     *
     * @param array $params Sale by 3d secure authorization params
     * @return array
     */
    public function cardAuthorizationBy3DSecure($params)
    {
        return $this->call(
            '3DSecure/auth',
            'post',
            $params
        );
    }

    /**
     * Performs sale by ID 3d secure authorization
     *
     * @param array $params Sale by 3d secure authorization params
     * @return array
     */
    public function saleBy3DSecureAuthorization($params)
    {
        return $this->call(
            '3DSecure/authSale',
            'post',
            $params
        );
    }

    /**
     * Perform check card
     *
     * @param array $params Check card params
     * @return array
     */
    public function checkCard($params)
    {
        return $this->call(
            'cards/check',
            'get',
            $params
        );
    }

    /**
     * Perform check card by token
     *
     * @param array $params Check card params
     * @return array
     */
    public function checkCardByToken($params)
    {
        return $this->call(
            'cards/checkByToken',
            'get',
            $params
        );
    }

    /**
     * Performs Apple Pay sale
     *
     * @param  array $params Apple Pay sale params
     * @return array
     */
    public function applePaySale(array $params)
    {
        return $this->call(
            'applepay/sale',
            'post',
            $params
        );
    }

    /**
     * Performs Apple Pay authorization
     *
     * @param  array $params Apple Pay authorization params
     * @return array
     */
    public function applePayAuthorization(array $params)
    {
        return $this->call(
            'applepay/authorization',
            'post',
            $params
        );
    }

    /**
     * Method responsible for preparing, setting state and returning answer from rest server
     *
     * @param string $method
     * @param string $request
     * @param array $params
     * @return array
     */
    protected function call($method, $request, $params)
    {
        $this->is_success = false;
        if (is_object($params)) {
            $params = (array)$params;
        }
        $validate_params = array
        (
            false === is_string($method) => 'Method name must be string',
            false === $this->checkRequestMethod($request) => 'Not allowed request method type',
        );
        $this->checkForErrors($validate_params);
        $params_encoded = json_encode($params);
        $response = $this->pushData($method, $request, $params_encoded);
        $response = json_decode($response, true);
        if (isset($response['success']) && $response['success'] === true) {
            $this->is_success = true;
        }
        return $response;
    }

    /**
     * Checking error mechanism
     *
     * @param array $validate_params
     * @throws \Exception
     */
    protected function checkForErrors($validate_params)
    {
        foreach ($validate_params as $key => $error) {
            if ($key) {
                throw new \Exception($error);
            }
        }
    }

    /**
     * Check if method is allowed
     *
     * @param string $method_type
     * @return bool
     */
    protected function checkRequestMethod($method_type)
    {
        $request_method = strtolower($method_type);
        if (in_array($request_method, $this->allowed_request_methods)) {
            return true;
        }
        return false;
    }

    /**
     * Method responsible for pushing data to REST server
     *
     * @param string $method
     * @param string $method_type
     * @param string $request - JSON
     * @return array
     * @throws \Exception
     */
    protected function pushData($method, $method_type, $request)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->api_url . $method);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($method_type));
        curl_setopt($ch, CURLOPT_HTTPAUTH, 1);
        curl_setopt($ch, CURLOPT_USERPWD, $this->username . ':' . $this->password);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $this->ssl_verify);
        $response = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        file_put_contents('logpushdata.log', json_encode($response));
        if (isset($this->http_errors[$http_code])) {
            throw new \Exception('Response Http Error - ' . $this->http_errors[$http_code]);
        }
        if (0 < curl_errno($ch)) {
            throw new \Exception('Unable to connect to ' . $this->api_url . ' Error: ' . curl_error($ch));
        }
        curl_close($ch);
        return $response;
    }
}
