<?php
namespace App;

interface RobotInterface
{
    /**
     * @return int
     */
    public function getWeight();

    /**
     * @return int
     */
    public function getHeight();

    /**
     * @return int
     */
    public function getSpeed();
}
