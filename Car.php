<?php

require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface
{
    private bool $isLightOn = false;

    public function switchOn(): bool
    {
        $this->isLightOn = true;
        return $this->isLightOn;
    }
    public function switchOff(): bool
    {
        $this->isLightOn = false;
        return $this->isLightOn;
    }
}
