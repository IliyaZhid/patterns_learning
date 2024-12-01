<?php

namespace FactoryMethod\Orders;

interface IOrder
{
    public function cancel();
    public function displayInfo();
}
