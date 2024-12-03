<?php

namespace Creational\FactoryMethod\Factories;

use Creational\FactoryMethod\OrderFactory;
use Creational\FactoryMethod\Orders\DeliveryOrder;
use Creational\FactoryMethod\Orders\IOrder;

class DeliveryOrderFactory extends OrderFactory
{
    public function createOrder(...$args): IOrder
    {
        return new DeliveryOrder(...$args);
    }
}
