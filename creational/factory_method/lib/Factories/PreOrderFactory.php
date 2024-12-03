<?php

namespace Creational\FactoryMethod\Factories;

use Creational\FactoryMethod\OrderFactory;
use Creational\FactoryMethod\Orders\PreOrder;
use Creational\FactoryMethod\Orders\IOrder;

class PreOrderFactory extends OrderFactory
{
    public function createOrder(...$args): IOrder
    {
        return new PreOrder(...$args);
    }
}
