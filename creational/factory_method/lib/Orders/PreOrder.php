<?php

namespace Creational\FactoryMethod\Orders;

class PreOrder implements IOrder
{

    private $items;
    private $prepayment;
    private $status;

    public function __construct($items, $prepayment) {
        $this->items = $items;
        $this->prepayment = $prepayment;
        $this->status = "Ожидает поступления";
    }

    public function cancel() {
        $this->status = "Отменен";
    }

    public function displayInfo() {
        echo "Предзаказ:\n";
        echo "- Товар: " . $this->items[0] . "\n";
        echo "- Предоплата: " . $this->prepayment . " руб.\n";
        echo "- Статус: " . $this->status . "\n";
    }
}
