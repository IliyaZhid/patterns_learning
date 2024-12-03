<?php

namespace Structural\Facade;

use Structural\Facade\SubSystems\Order;
use Structural\Facade\SubSystems\Payment;
use Structural\Facade\SubSystems\Product;
use Structural\Facade\SubSystems\Shipping;

class OrderFacade
{
    private Order $order;
    private Shipping $shipping;
    private Payment $payment;

    public function __construct()
    {
        $this->order = new Order();
        $this->shipping = new Shipping();
        $this->payment = new Payment();
    }

    public function createOrder(): void
    {
        $this->order = new Order();
    }

    public function addProduct(Product $product): void
    {
        $this->order->addProduct($product);
    }

    public function calculateTotal(): float
    {
        $total = 0;
        foreach ($this->order->getProducts() as $product) {
            $total += $product->getPrice();
        }
        return $total;
    }

    public function checkout(): void
    {
        $total = $this->calculateTotal();
        $this->payment->processPayment($total);
    }

    public function shipOrder(): void
    {
        $this->shipping->shipOrder($this->order);
    }
}
