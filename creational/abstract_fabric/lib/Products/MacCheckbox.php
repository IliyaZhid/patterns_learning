<?php

namespace Creational\AbstractFactory\Products;

class MacCheckbox implements ICheckbox
{

    public function display(): void
    {
        echo 'Mac Checkbox ✅' . PHP_EOL;
    }
}
