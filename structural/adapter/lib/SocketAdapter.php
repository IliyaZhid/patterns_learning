<?php
namespace Structural\Adapter;

use Structural\Adapter\Devices\ISmartDevice;
use Structural\Adapter\Devices\Socket;

class SocketAdapter implements ISmartDevice
{
    private Socket $device;

    public function __construct($device) {
        $this->device = $device;
    }

    public function turnOn() {
        if(!$this->device->checkElectricity()) {
            $this->device->turnElectricity();
        }
        echo "Розетка включена ✅" . PHP_EOL;
    }

    public function turnOff() {
        if($this->device->checkElectricity()) {
            $this->device->turnElectricity();
        }
        echo "Розетка выключена ❌" . PHP_EOL;
    }

    public function getStatus(): string
    {
        return $this->device->checkElectricity() ? 'Включена' : 'Выключена';
    }

}
