<?php

namespace Creational\FactoryMethod\Factories;

use Creational\FactoryMethod\OrderFactory;
use Creational\FactoryMethod\Orders\RegularOrder;
use Creational\FactoryMethod\Orders\IOrder;

class RegularOrderFactory extends OrderFactory
{
    public function createOrder(...$args): IOrder
    {
        return new RegularOrder(...$args);
    }
}
