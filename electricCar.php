<?php

// Attachement de Car à son parent Véhicule

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class ElectricCar extends Vehicle implements LightableInterface
{
    public function switchOn(): bool
    {
       return  $this->switchOn(true);
    }

    public function switchOff(): bool
    {
        return $this->switchOff(false);
    }

}
