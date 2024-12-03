<?php

namespace Behavioral\Observer\Publishers;

use Behavioral\Observer\Subscribers\ISubscriber;

class NotificationSystem implements IPublisher
{
    private array $observers = [];

    public function subscribe(ISubscriber $observer)
    {
        $this->observers[] = $observer;
    }

    public function unsubscribe(ISubscriber $observer)
    {
        $this->observers = array_filter($this->observers, function ($obs) use ($observer) {
            return $obs !== $observer;
        });
    }

    public function notify(string $event, array $data)
    {
        foreach ($this->observers as $observer) {
            $observer->update($event, $data);
        }
    }
}
