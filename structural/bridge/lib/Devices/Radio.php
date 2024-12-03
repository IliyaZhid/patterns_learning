<?php

namespace Structural\Bridge\Devices;

class Radio implements IDevice
{
    private bool $enabled;
    private int $volume;
    private int $channel;

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
        echo "Радиоприемник включен" . PHP_EOL;
        $this->enabled = true;
    }

    public function disable()
    {
        echo "Радиоприемник выключен" . PHP_EOL;
        $this->enabled = false;
    }

    public function getVolume(): int
    {
        return $this->volume;
    }

    public function setVolume(int $percent)
    {
        echo "Громкость радиоприемника изменена, текущее значение {$percent}%" . PHP_EOL;
        $this->volume = $percent;
    }

    public function getChannel(): int
    {
        return $this->channel;
    }

    public function setChannel(int $channel)
    {
        echo "Станция радиоприемника изменена, текущее значение {$channel}" . PHP_EOL;
        $this->channel = $channel;
    }
}
