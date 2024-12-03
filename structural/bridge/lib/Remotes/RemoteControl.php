<?php

namespace Structural\Bridge\Remotes;

use Structural\Bridge\Devices\IDevice;

class RemoteControl
{
    protected IDevice $device;

    public function __construct(IDevice $device)
    {
        $this->device = $device;
    }

    public function togglePower()
    {
        if ($this->device->isEnabled()) {
            $this->device->disable();
        } else {
            $this->device->enable();
        }
    }

    public function volumeUp()
    {
        $currentVolume = $this->device->getVolume();
        $this->device->setVolume(++$currentVolume);
    }

    public function volumeDown()
    {
        $currentVolume = $this->device->getVolume();
        $this->device->setVolume(--$currentVolume);
    }

    public function channelUp()
    {
        $currentChannel = $this->device->getChannel();
        $this->device->setChannel(++$currentChannel);
    }

    public function channelDown()
    {
        $currentChannel = $this->device->getChannel();
        $this->device->setChannel(--$currentChannel);
    }
}
