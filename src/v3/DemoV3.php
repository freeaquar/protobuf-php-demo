<?php

require_once(__DIR__ . '/../../vendor/autoload.php');

$foo = new \ThirdV3\Map();
$foo->setUid("this-id");
$foo->setLng(2);
$foo->setLat(3);
$foo->setSpeed(3.12);
$foo->setLocType(\ThirdV3\LocationType::OTHER);
$p = $foo->serializeToString();
var_dump(bin2hex($p));

$bar = new \ThirdV3\Map();
$bar->mergeFromString($p);
var_dump(
    [
        "uid"       => $foo->getUid(),
        "lng"       => $foo->getLng(),
        "lat"       => $foo->getLat(),
        "speed"     => $foo->getSpeed(),
        "loca_type" => $foo->getLocType(),
    ]
);
