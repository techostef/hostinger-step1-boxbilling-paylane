#!/bin/bash

set -e

TAG=$1

if [ -z $TAG ]; then
    echo "Please specify a tag"
    exit 1
fi

if [ -f geoip2.phar ]; then
    rm geoip2.phar
fi

if [ -n "$(git status --porcelain)" ]; then
    echo ". is not clean." >&2
    exit 1
fi

if [ -d vendor ]; then
    rm -fr vendor
fi

php composer.phar self-update
php composer.phar update --no-dev

if [ ! -f box.phar ]; then
    wget -O box.phar "https://github.com/kherge-archive/Box/releases/download/2.4.4/box-2.4.4.phar"
fi

php box.phar build

php composer.phar update

./vendor/bin/phpunit

if [ ! -d .gh-pages ]; then
    echo "Checking out gh-pages in .gh-pages"
    git clone -b gh-pages git@git.maxmind.com:GeoIP2-php .gh-pages
    pushd .gh-pages
else
    echo "Updating .gh-pages"
    pushd .gh-pages
    git pull
fi

if [ -n "$(git status --porcelain)" ]; then
    echo ".gh-pages is not clean" >&2
    exit 1
fi

# We no longer have apigen as a dependency in Composer as releases are
# sporadically deleted upstream and compatibility is often broken on patch
# releases.
if [ ! -f apigen.phar ]; then
    wget -O apigen.phar "https://github.com/apigen/apigen/releases/download/v4.0.0-RC3/apigen-4.0.0-RC3.phar"
fi


cat <<EOF > apigen.neon
destination: doc/$TAG

source:
    - ../src

title: "GeoIP2 PHP API $TAG"
EOF

php apigen.phar generate


PAGE=index.md
cat <<EOF > $PAGE
---
layout: default
title: MaxMind GeoIP2 PHP API
language: php
version: $TAG
---

EOF

cat ../README.md >> $PAGE

git add doc/
git commit -m "Updated for $TAG" -a

read -e -p "Push to origin? " SHOULD_PUSH

if [ "$SHOULD_PUSH" != "y" ]; then
    echo "Aborting"
    exit 1
fi

# If we don't push directly to github, the page doesn't get built for some
# reason.
git push git@github.com:maxmind/GeoIP2-php.git
git push

popd

git tag -a $TAG
git push
git push --tags
