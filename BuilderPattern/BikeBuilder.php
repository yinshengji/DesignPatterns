<?php
/**
 * Created by PhpStorm.
 * User: mioji
 * Date: 2018/1/27
 * Time: 下午10:49
 */

namespace BuilderPattern;

use BuilderPattern\Parts\Bike;
use BuilderPattern\Parts\Door;
use BuilderPattern\Parts\Engine;
use BuilderPattern\Parts\Wheel;

class BikeBuilder implements BuilderInterface
{
    protected $bike;

    public function createVehicle()
    {
        $this->bike = new Bike();
    }

    public function addWheel()
    {
        $this->bike->setParts('bikeNoseWheel', new Wheel());
        $this->bike->setParts('bikeRearRight', new Wheel());
    }

    public function addEngine()
    {
        $this->bike->setParts('bikeEngine', new Engine());
    }

    public function addDoor()
    {
        $this->bike->setParts('bikeLeftDoor', new Door());
        $this->bike->setParts('bikeRightDoor', new Door());
    }

    public function getVehicle()
    {
        return $this->bike;
    }

}