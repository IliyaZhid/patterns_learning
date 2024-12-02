<?php

namespace AbstractFactory\Tests;

use AbstractFactory\Factories\WindowsFactory;
use AbstractFactory\Factories\MacFactory;
use AbstractFactory\Products\WindowsButton;
use AbstractFactory\Products\MacButton;
use AbstractFactory\Products\WindowsCheckbox;
use AbstractFactory\Products\MacCheckbox;
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
