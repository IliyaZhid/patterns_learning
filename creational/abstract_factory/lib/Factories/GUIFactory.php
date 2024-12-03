<?php

namespace Creational\AbstractFactory\Factories;

use Creational\AbstractFactory\Products\IButton;
use Creational\AbstractFactory\Products\ICheckbox;

interface GUIFactory
{
    public function createButton(): IButton;

    public function createCheckbox(): ICheckbox;
}
