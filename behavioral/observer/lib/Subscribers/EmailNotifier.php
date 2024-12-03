<?php

namespace Behavioral\Observer\Subscribers;

class EmailNotifier implements ISubscriber
{

    public function update(string $event, array $data)
    {
        echo "EmailNotifier: Получил событие '$event'! Сообщение: " . json_encode($data) . PHP_EOL;
    }
}
