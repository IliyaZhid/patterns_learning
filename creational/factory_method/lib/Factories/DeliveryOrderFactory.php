<?php

namespace FactoryMethod\Factories;

use FactoryMethod\OrderFactory;
use FactoryMethod\Orders\DeliveryOrder;
use FactoryMethod\Orders\IOrder;

class DeliveryOrderFactory extends OrderFactory
{
    public function createOrder(...$args): IOrder
    {
        return new DeliveryOrder(...$args);
    }
}
