<?php

namespace AbstractFactory\Factories;

use AbstractFactory\Products\IButton;
use AbstractFactory\Products\ICheckbox;
use AbstractFactory\Products\MacButton;
use AbstractFactory\Products\MacCheckbox;

class MacFactory implements GUIFactory
{

    public function createButton(): IButton
    {
       return new MacButton();
    }

    public function createCheckbox(): ICheckbox
    {
        return new MacCheckbox();
    }
}
