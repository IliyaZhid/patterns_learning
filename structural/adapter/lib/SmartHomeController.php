<?php

namespace Structural\Adapter;

use Structural\Adapter\Devices\ISmartDevice;

class SmartHomeController {
    private $devices = [];

    public function addDevice(ISmartDevice $device) {
        $this->devices[] = $device;
    }

    public function turnOnAll() {
        foreach ($this->devices as $device) {
            $device->turnOn();
        }
    }

    public function turnOffAll() {
        foreach ($this->devices as $device) {
            $device->turnOff();
        }
    }

    public function getAllStatuses() {
        foreach ($this->devices as $device) {
            echo $device->getStatus() . PHP_EOL;
        }
    }
}
