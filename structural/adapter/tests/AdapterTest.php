<?php

use PHPUnit\Framework\TestCase;
use Structural\Adapter\Devices\Light;
use Structural\Adapter\Devices\Socket;
use Structural\Adapter\SmartHomeController;
use Structural\Adapter\SocketAdapter;

class AdapterTest extends TestCase {
    public function testAdapter() {
        $controller = new SmartHomeController();

        $controller->addDevice(new Light());
        $controller->addDevice(new SocketAdapter(new Socket()));

        $controller->turnOnAll();
        $controller->turnOffAll();
        $controller->getAllStatuses();

        $this->expectOutputString("Свет включен 💡\nРозетка включена ✅\nСвет выключен 🔦\nРозетка выключена ❌\nВыключен\nВыключена\n");
    }
}
