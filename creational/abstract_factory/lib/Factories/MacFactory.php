<?php

namespace Creational\AbstractFactory\Factories;

use Creational\AbstractFactory\Products\IButton;
use Creational\AbstractFactory\Products\ICheckbox;
use Creational\AbstractFactory\Products\MacButton;
use Creational\AbstractFactory\Products\MacCheckbox;

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
