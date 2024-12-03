<?php

namespace Behavioral\Observer\Publishers;

use Behavioral\Observer\Subscribers\ISubscriber;

interface IPublisher
{
    public function subscribe(ISubscriber $observer);
    public function unsubscribe(ISubscriber $observer);
    public function notify(string $event, array $data);
}
