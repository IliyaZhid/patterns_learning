<?php

namespace FactoryMethod\Orders;

class RegularOrder implements IOrder
{

    private $items;
    private $status;

    public function __construct($items) {
        $this->items = $items;
        $this->status = "Ожидает оплаты";
    }

    public function cancel() {
        $this->status = "Отменен";
    }

    public function displayInfo() {
        echo "Обычный заказ:\n";
        echo "- Товары: " . implode(", ", $this->items) . "\n";
        echo "- Статус: " . $this->status . "\n";
    }
}
