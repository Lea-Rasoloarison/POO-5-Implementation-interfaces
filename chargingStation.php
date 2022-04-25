<?php

require_once 'LightableInterface.php';

class ChargingStation
{
    public function fullCharge(LightableInterface $vehicle)
    {
        $vehicle->charge(100);
    }
}