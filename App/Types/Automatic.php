<?php
namespace App\Types;

use App\RobotInterface;

class Automatic implements TypeInterface, RobotInterface
{
    /**
     * @return string
     */
    public function getType()
    {
        return 'Automatic';
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return 100;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return 200;
    }

    /**
     * @return int
     */
    public function getSpeed()
    {
        return 300;
    }
}
