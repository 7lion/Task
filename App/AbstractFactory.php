<?php
namespace App;

use App\Types\TypeInterface;

abstract class AbstractFactory
{
    abstract function createRobots(TypeInterface $type, $count);
    abstract function addAllowType(TypeInterface $type);
}
