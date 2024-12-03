<?php

namespace AbstractFactory\Tests;

use Creational\AbstractFactory\Factories\WindowsFactory;
use Creational\AbstractFactory\Factories\MacFactory;
use Creational\AbstractFactory\Products\WindowsButton;
use Creational\AbstractFactory\Products\MacButton;
use Creational\AbstractFactory\Products\WindowsCheckbox;
use Creational\AbstractFactory\Products\MacCheckbox;
use PHPUnit\Framework\TestCase;


class AbstractFactoryTest extends TestCase
{

    public function testWindowsFactory()
    {
        $factory = new WindowsFactory();

        $button = $factory->createButton();
        $this->assertInstanceOf(WindowsButton::class, $button);

        $checkbox = $factory->createCheckbox();
        $this->assertInstanceOf(WindowsCheckbox::class, $checkbox);
    }

    public function testMacOSFactory()
    {
        $factory = new MacFactory();

        $button = $factory->createButton();
        $this->assertInstanceOf(MacButton::class, $button);

        $checkbox = $factory->createCheckbox();
        $this->assertInstanceOf(MacCheckbox::class, $checkbox);
    }

}
