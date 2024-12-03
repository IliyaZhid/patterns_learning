<?php

namespace Structural\Bridge\Devices;

class TV implements IDevice
{

    private bool $enabled;
    private int $volume = 0;
    private int $channel = 0;

    public function __construct()
    {
        $this->enabled = false;
        $this->volume = 0;
        $this->channel = 0;
    }

    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    public function enable()
    {
        echo 'Телевизор включен' . PHP_EOL;
        $this->enabled = true;
    }

    public function disable()
    {
        echo 'Телевизор выключен' . PHP_EOL;
        $this->enabled = false;
    }

    public function getVolume(): int
    {
        return $this->volume;
    }

    public function setVolume(int $percent)
    {
        echo "Громкость телевизора изменена, текущее значение {$percent}%" . PHP_EOL;
        $this->volume = $percent;
    }

    public function getChannel(): int
    {
        return $this->channel;
    }

    public function setChannel(int $channel)
    {
        echo "Переключен канал телевизора, текущее значение {$channel}" . PHP_EOL;
        $this->channel = $channel;
    }
}
