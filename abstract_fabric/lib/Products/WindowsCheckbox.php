<?php

namespace AbstractFactory\Products;

class WindowsCheckbox implements ICheckbox
{

    public function display(): void
    {
        echo 'Windows Checkbox ✅' . PHP_EOL;
    }
}
