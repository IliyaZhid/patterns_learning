<?php

namespace Structural\Facade\SubSystems;

class Shipping
{
    public function shipOrder(Order $order): void
    {
        echo "Доставка заказа с товарами: " . implode(", ", array_map(function ($product) {
                return $product->getName();
            }, $order->getProducts())) . PHP_EOL;
    }
}
