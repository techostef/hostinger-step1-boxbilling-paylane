<?php 
return array (
  'debug' => false,
  'license' => 'FREE-5QAP-P8J3-SCLB-UDYZ-L7UM',
  'salt' => '605a79b454520104358268b53a2930ba',
  'url' => 'http://localhost/boxbilling/',
  'admin_area_prefix' => '/bb-admin',
  'sef_urls' => false,
  'timezone' => 'UTC',
  'locale' => 'en_US',
  'locale_date_format' => '%A, %d %B %G',
  'locale_time_format' => ' %T',
  'path_data' => 'C:\\xampp 5.6\\htdocs\\BoxBilling/bb-data',
  'path_logs' => 'C:\\xampp 5.6\\htdocs\\BoxBilling/bb-data/log/application.log',
  'log_to_db' => true,
  'db' => 
  array (
    'type' => 'mysql',
    'host' => 'localhost',
    'name' => 'boxbilling',
    'user' => 'root',
    'password' => '',
  ),
  'twig' => 
  array (
    'debug' => true,
    'auto_reload' => true,
    'cache' => 'C:\\xampp 5.6\\htdocs\\BoxBilling/bb-data/cache',
  ),
  'api' => 
  array (
    'require_referrer_header' => false,
    'allowed_ips' => 
    array (
    ),
    'rate_span' => 3600,
    'rate_limit' => 1000,
  ),
);