<?php

namespace Behavioral\Observer\Subscribers;

interface ISubscriber
{
    public function update(string $event, array $data);
}
