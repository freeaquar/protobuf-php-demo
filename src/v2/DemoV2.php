<?php

require_once(__DIR__ . '/../../vendor/autoload.php');

$foo = new \ThirdV2\Map();
$foo->setUid("this-id");
$foo->setLng(2);
$foo->setLat(3);
$foo->setSpeed(3.12);
$foo->setLocType(\ThirdV2\LocationType::OTHER);
$p = $foo->serializeToString();
var_dump(bin2hex($p));

$bar = new \ThirdV2\Map();
$bar->parseFromString($p);
var_dump(
    [
        "uid"       => $foo->getUid(),
        "lng"       => $foo->getLng(),
        "lat"       => $foo->getLat(),
        "speed"     => $foo->getSpeed(),
        "loca_type" => $foo->getLocType(),
    ]
);
