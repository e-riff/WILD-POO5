<?php

class Vehicle
{
    protected int $currentSpeed;

    public function __construct(int $currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;
    }


    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }
}
