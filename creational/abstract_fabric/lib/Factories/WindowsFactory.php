<?php

namespace AbstractFactory\Factories;

use AbstractFactory\Products\IButton;
use AbstractFactory\Products\ICheckbox;
use AbstractFactory\Products\WindowsButton;
use AbstractFactory\Products\WindowsCheckbox;

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
