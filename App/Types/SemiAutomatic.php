<?php
namespace App\Types;

use App\RobotInterface;

class SemiAutomatic implements TypeInterface, RobotInterface
{
    /**
     * @return string
     */
    public function getType()
    {
        return 'SemiAutomatic';
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return 400;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return 500;
    }

    /**
     * @return int
     */
    public function getSpeed()
    {
        return 600;
    }
}
