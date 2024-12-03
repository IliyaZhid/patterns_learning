<?php
require_once __DIR__ . '/vendor/autoload.php';

use Structural\Facade\OrderFacade;
use Structural\Facade\SubSystems\Product;

$orderFacade = new OrderFacade();

$orderFacade->createOrder();
$orderFacade->addProduct(new Product("Бусы", 100));
$orderFacade->addProduct(new Product("Полотенце", 200));
$total = $orderFacade->calculateTotal();
echo "Итог: $total" . PHP_EOL;
$orderFacade->checkout();
$orderFacade->shipOrder();
