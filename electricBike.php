<?php

require 'vehicle.php';
require_once 'LightableInterface.php';

class ElectricBike extends Vehicle implements LightableInterface
{
    public function __construct(int $speed)
    {
        $this->speed = $speed;
    }

    public function switchOn(): bool
    {
        if ($this->speed > 10) {
            return true;
        } else {
            return false;
        }
    }

    public function switchOff(): bool
    {
        return false;
    }
}