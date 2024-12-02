<?php

namespace FactoryMethod\Factories;

use FactoryMethod\OrderFactory;
use FactoryMethod\Orders\RegularOrder;
use FactoryMethod\Orders\IOrder;

class RegularOrderFactory extends OrderFactory
{
    public function createOrder(...$args): IOrder
    {
        return new RegularOrder(...$args);
    }
}
