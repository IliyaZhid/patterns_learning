<?php

namespace Structural\Bridge\Remotes;

class AdvancedRemote extends RemoteControl
{
    public function mute()
    {
        $this->device->setVolume(0);
    }
}
