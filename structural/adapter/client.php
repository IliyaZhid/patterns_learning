<?php
require_once __DIR__ . '/vendor/autoload.php';

use Structural\Adapter\SocketAdapter;
use Structural\Adapter\Devices\Light;
use Structural\Adapter\Devices\Socket;
use Structural\Adapter\SmartHomeController;


$controller = new SmartHomeController();

$controller->addDevice(new Light());

$controller->addDevice(new SocketAdapter(new Socket()));

$controller->turnOnAll();
$controller->turnOffAll();
$controller->getAllStatuses();
