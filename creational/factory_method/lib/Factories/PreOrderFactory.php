<?php

namespace FactoryMethod\Factories;

use FactoryMethod\OrderFactory;
use FactoryMethod\Orders\PreOrder;
use FactoryMethod\Orders\IOrder;

class PreOrderFactory extends OrderFactory
{
    public function createOrder(...$args): IOrder
    {
        return new PreOrder(...$args);
    }
}
