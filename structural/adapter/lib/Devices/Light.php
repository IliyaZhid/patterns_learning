<?php

namespace Structural\Adapter\Devices;

class Light implements ISmartDevice
{
    private string $status;

    public function turnOn(): void {
        $this->status = 'Включен';
        echo "Свет включен 💡" . PHP_EOL;
    }

    public function turnOff(): void {
        $this->status = 'Выключен';
        echo "Свет выключен 🔦" . PHP_EOL;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}
