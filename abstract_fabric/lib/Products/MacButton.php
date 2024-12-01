<?php

namespace AbstractFactory\Products;

class MacButton implements IButton
{

    public function display(): void
    {
        echo '[ Mac Button 🍏]' . PHP_EOL;
    }
}
