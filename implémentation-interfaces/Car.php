<?php

class car implements Lightbleinterface
{
    public int $currentSpeed;

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;
    }


    public function switchon(bool $switchon): bool
        if ($currentSpeed > 10) {
                return false;
    }  else {
                return TRUE;
    }

    public function switchoff(bool $switchoff): bool
                return FALSE;


}