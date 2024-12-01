<?php
namespace FactoryMethod;

use FactoryMethod\Orders\IOrder;


abstract class OrderFactory
{
    abstract public function createOrder(...$args): IOrder;
}
