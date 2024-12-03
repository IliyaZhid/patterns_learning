<?php
require_once __DIR__ . '/vendor/autoload.php';

use Structural\Bridge\Devices\TV;
use Structural\Bridge\Devices\Radio;
use Structural\Bridge\Remotes\RemoteControl;
use Structural\Bridge\Remotes\AdvancedRemote;

$tv = new TV();
$remote = new RemoteControl($tv);

$remote->togglePower();
$remote->volumeUp();
$remote->channelUp();
$remote->togglePower();

echo PHP_EOL;

$radio = new Radio();
$advancedRemote = new AdvancedRemote($radio);

$advancedRemote->togglePower();
$advancedRemote->volumeUp();
$advancedRemote->channelUp();
$advancedRemote->mute();
$advancedRemote->togglePower();
