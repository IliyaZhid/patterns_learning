<?php

namespace Creational\AbstractFactory\Factories;

use Creational\AbstractFactory\Products\IButton;
use Creational\AbstractFactory\Products\ICheckbox;
use Creational\AbstractFactory\Products\WindowsButton;
use Creational\AbstractFactory\Products\WindowsCheckbox;

class WindowsFactory implements GUIFactory
{

    public function createButton(): IButton
    {
        return new WindowsButton();
    }

    public function createCheckbox(): ICheckbox
    {
        return new WindowsCheckbox();
    }
}
