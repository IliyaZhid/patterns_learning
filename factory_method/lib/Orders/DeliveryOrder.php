<?php

namespace FactoryMethod\Orders;

class DeliveryOrder implements IOrder
{

    private $items;
    private $deliveryMethod;
    private $address;
    private $status;

    public function __construct($items, $deliveryMethod, $address) {
        $this->items = $items;
        $this->deliveryMethod = $deliveryMethod;
        $this->address = $address;
        $this->status = "Ожидает отправки";
    }

    public function cancel() {
        $this->status = "Отменен";
    }

    public function displayInfo() {
        echo "Заказ с доставкой:\n";
        echo "- Товары: " . implode(", ", $this->items) . "\n";
        echo "- Способ доставки: " . $this->deliveryMethod . "\n";
        echo "- Адрес: " . $this->address . "\n";
        echo "- Статус: " . $this->status . "\n";
    }
}
