<?php

require '../vendor/autoload.php';

$factory = new App\Factory();
$factory->addAllowType(new \App\Types\Automatic());
$factory->addAllowType(new \App\Types\SemiAutomatic());

$robots1 = $factory->createRobots(new \App\Types\Automatic(), 2);
$robots2 = $factory->createRobots(new \App\Types\SemiAutomatic(), 3);

$robots = array_merge($robots1, $robots2);

echo 'Robots:';
var_dump($robots);

$unionRobot = new \App\UnionRobot();
foreach ($robots as $robot) {
    $unionRobot->addRobot($robot);
}

echo 'Height:';
var_dump($unionRobot->getHeight());

echo 'Weight:';
var_dump($unionRobot->getWeight());

echo 'Speed:';
var_dump($unionRobot->getSpeed());
