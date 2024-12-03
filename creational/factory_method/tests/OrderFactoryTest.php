<?php

namespace FactoryMethod\Tests;

use Creational\FactoryMethod\Factories\RegularOrderFactory;
use Creational\FactoryMethod\Factories\PreOrderFactory;
use Creational\FactoryMethod\Factories\DeliveryOrderFactory;
use Creational\FactoryMethod\Orders\RegularOrder;
use Creational\FactoryMethod\Orders\PreOrder;
use Creational\FactoryMethod\Orders\DeliveryOrder;
use PHPUnit\Framework\TestCase;

class OrderFactoryTest extends TestCase
{
    public function testCreateRegularOrder()
    {
        $factory = new RegularOrderFactory();
        $order = $factory->createOrder(["Телефон", "Чехол"]);
        $this->assertInstanceOf(RegularOrder::class, $order);
    }

    public function testCreatePreOrder()
    {
        $factory = new PreOrderFactory();
        $order = $factory->createOrder(["Телевизор"], 1000);
        $this->assertInstanceOf(PreOrder::class, $order);
    }

    public function testCreateDeliveryOrder()
    {
        $factory = new DeliveryOrderFactory();
        $order = $factory->createOrder(["Ноутбук"], "Курьер", "ул. Ленина, д. 1");
        $this->assertInstanceOf(DeliveryOrder::class, $order);
    }
}
