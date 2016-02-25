<?php

require '../vendor/autoload.php';

$factory = new App\Factory();
$factory->addAllowType(new \App\Types\Automatic());
$factory->addAllowType(new \App\Types\SemiAutomatic());

var_dump($factory->createRobots(new \App\Types\Automatic(), 5));
var_dump($factory->createRobots(new \App\Types\SemiAutomatic(), 3));