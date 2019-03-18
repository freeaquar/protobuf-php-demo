#!/usr/bin/env bash

proj_path=$(dirname "${0}");
cd "${proj_path}";
php allegro/php-protobuf/protoc-gen-php.php ThirdV2.proto
cd -;
