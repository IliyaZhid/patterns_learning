<?php

namespace Creational\AbstractFactory\Products;

class WindowsButton implements IButton
{

    public function display(): void
    {
        echo '[ Windows Button 🪟]' . PHP_EOL;
    }
}
