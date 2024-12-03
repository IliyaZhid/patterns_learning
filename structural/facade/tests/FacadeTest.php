<?php

use PHPUnit\Framework\TestCase;
use Structural\Facade\OrderFacade;
use Structural\Facade\SubSystems\Product;

class FacadeTest extends TestCase
{
    public function testOrderFacade()
    {
        $orderFacade = new OrderFacade();

        $orderFacade->createOrder();
        $orderFacade->addProduct(new Product("Шариковая ручка", 100));
        $orderFacade->addProduct(new Product("Диван", 200));
        $total = $orderFacade->calculateTotal();
        $this->assertEquals(300, $total);

        $orderFacade->checkout();
        $orderFacade->shipOrder();

        $this->expectOutputString(
            "Обработка платежа на сумму: 300\n" .
            "Доставка заказа с товарами: Шариковая ручка, Диван\n"
        );
    }
}
