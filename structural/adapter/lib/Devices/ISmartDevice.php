<?php

namespace Structural\Adapter\Devices;

interface ISmartDevice
{
    public function turnOn();

    public function turnOff();

    public function getStatus();
}
