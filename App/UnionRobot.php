<?php
namespace App;

class UnionRobot
{
    protected $robots = [];

    public function addRobot(RobotInterface $robot)
    {
        $this->robots[] = $robot;
    }

    public function getSpeed()
    {
        $speed = [];
        foreach ($this->robots as $robot) {
            /** @var RobotInterface $robot */
            $speed[] = $robot->getSpeed();
        }
        return min($speed);
    }

    public function getHeight()
    {
        $height = 0;
        foreach ($this->robots as $robot) {
            /** @var RobotInterface $robot */
            $height += $robot->getHeight();
        }
        return $height;
    }

    public function getWeight()
    {
        $weight = 0;
        foreach ($this->robots as $robot) {
            /** @var RobotInterface $robot */
            $weight += $robot->getWeight();
        }
        return $weight;
    }
}
