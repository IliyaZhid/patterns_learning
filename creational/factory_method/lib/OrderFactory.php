<?php
namespace Creational\FactoryMethod;

use Creational\FactoryMethod\Orders\IOrder;


abstract class OrderFactory
{
    abstract public function createOrder(...$args): IOrder;
}
