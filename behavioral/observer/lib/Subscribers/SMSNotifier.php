<?php

namespace Behavioral\Observer\Subscribers;

class SMSNotifier implements ISubscriber
{

    public function update(string $event, array $data)
    {
        echo "SMSNotifier: Получил событие '$event'! Сообщение: " . json_encode($data) . PHP_EOL;
    }
}
