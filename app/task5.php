<?php

$bmw = [
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => 2015,
];

$toyota = [
    "model" => "Camry",
    "speed" => 110,
    "doors" => 5,
    "year" => 2011,
];

$opel = [
    "model" => "Tigra",
    "speed" => 140,
    "doors" => 3,
    "year" => 2006,
];

$cars = [
    "bmw" => $bmw,
    "toyota" => $toyota,
    "opel" => $opel,
];

foreach ($cars as $key => $value) {
    echo "CAR\t" . $key . "<br />";
    foreach ($value as $val) {
        echo $val . "\t";
    }
    echo "<br /><br />";
}
