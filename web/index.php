<?php

require '../vendor/autoload.php';

$factory = new App\Factory();
$factory->addAllowType(new \App\Types\Automatic());
$factory->addAllowType(new \App\Types\SemiAutomatic());

$automaticRobots = $factory->createRobots(new \App\Types\Automatic(), 2);
$semiAutomaticRobots = $factory->createRobots(new \App\Types\SemiAutomatic(), 3);

$robotsForUnion = array_merge($automaticRobots, $semiAutomaticRobots);

echo 'Robots for union:';
var_dump($robotsForUnion);

$unionRobot = new \App\UnionRobot();
foreach ($robotsForUnion as $robot) {
    $unionRobot->addRobot($robot);
}

echo 'Height:';
var_dump($unionRobot->getHeight());

echo 'Weight:';
var_dump($unionRobot->getWeight());

echo 'Speed:';
var_dump($unionRobot->getSpeed());
