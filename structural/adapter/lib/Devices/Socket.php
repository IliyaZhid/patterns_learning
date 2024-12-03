<?php

namespace Structural\Adapter\Devices;

class Socket
{
    private bool $electricity = false;

    public function turnElectricity(): void
    {
        $this->electricity = !$this->electricity;
    }

    public function checkElectricity(): bool
    {
        return $this->electricity;
    }
}
