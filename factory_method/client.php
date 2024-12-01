<?php

require_once __DIR__ . '/vendor/autoload.php';

use FactoryMethod\Factories\RegularOrderFactory;
use FactoryMethod\Factories\PreOrderFactory;
use FactoryMethod\Factories\DeliveryOrderFactory;

$regularFactory = new RegularOrderFactory();
$preFactory = new PreOrderFactory();
$deliveryFactory = new DeliveryOrderFactory();

$order1 = $regularFactory->createOrder(["Телефон", "Чехол"]);
$order2 = $preFactory->createOrder(["Телевизор"], 1000);
$order3 = $deliveryFactory->createOrder(["Ноутбук"], "Курьер", "ул. Ленина, д. 1");

$order1->displayInfo();
$order2->displayInfo();
$order3->displayInfo();
