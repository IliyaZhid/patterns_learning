<?php

namespace Structural\Bridge\Devices;

interface IDevice
{
    public function isEnabled();
    public function enable();
    public function disable();
    public function getVolume();
    public function setVolume(int $percent);
    public function getChannel();
    public function setChannel(int $channel);
}
