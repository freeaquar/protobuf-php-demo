#!/usr/bin/env bash

proj_path=$(dirname "${0}");
cd "${proj_path}";
protoc --php_out=. ThirdV3.proto
cd -;
