<?php

namespace Structural\Facade\SubSystems;

class Payment
{
    public function processPayment(float $amount): void
    {
        echo "Обработка платежа на сумму: $amount" . PHP_EOL;
    }
}
