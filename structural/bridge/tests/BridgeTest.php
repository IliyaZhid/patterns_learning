<?php

use PHPUnit\Framework\TestCase;
use Structural\Bridge\Devices\TV;
use Structural\Bridge\Devices\Radio;
use Structural\Bridge\Remotes\RemoteControl;
use Structural\Bridge\Remotes\AdvancedRemote;

class BridgeTest extends TestCase
{
    public function testTVRemoteControl()
    {
        $tv = new TV();
        $remote = new RemoteControl($tv);

        $remote->togglePower();
        $remote->volumeUp();
        $remote->channelUp();
        $remote->togglePower();

        $this->expectOutputString(
            "Телевизор включен\n" .
            "Громкость телевизора изменена, текущее значение 1%\n" .
            "Переключен канал телевизора, текущее значение 1\n" .
            "Телевизор выключен\n"
        );
    }

    public function testRadioAdvancedRemote()
    {
        $radio = new Radio();
        $remote = new AdvancedRemote($radio);

        $remote->togglePower();
        $remote->volumeUp();
        $remote->channelUp();
        $remote->mute();
        $remote->togglePower();

        $this->expectOutputString(
            "Радиоприемник включен\n" .
            "Громкость радиоприемника изменена, текущее значение 1%\n" .
            "Станция радиоприемника изменена, текущее значение 1\n" .
            "Громкость радиоприемника изменена, текущее значение 0%\n" .
            "Радиоприемник выключен\n"
        );
    }
}
