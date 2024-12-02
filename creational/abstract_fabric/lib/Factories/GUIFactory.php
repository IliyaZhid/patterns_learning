<?php

namespace AbstractFactory\Factories;

use AbstractFactory\Products\IButton;
use AbstractFactory\Products\ICheckbox;

interface GUIFactory
{
    public function createButton(): IButton;

    public function createCheckbox(): ICheckbox;
}
