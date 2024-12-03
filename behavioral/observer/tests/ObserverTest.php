<?php

use PHPUnit\Framework\TestCase;
use Behavioral\Observer\Subscribers\EmailNotifier;
use Behavioral\Observer\Subscribers\SMSNotifier;
use Behavioral\Observer\Publishers\NotificationSystem;

class ObserverTest extends TestCase
{
    public function testObserver()
    {
        $notificationSystem = new NotificationSystem();

        $emailNotifier = new EmailNotifier();
        $smsNotifier = new SMSNotifier();

        $notificationSystem->subscribe($emailNotifier);
        $notificationSystem->subscribe($smsNotifier);

        $notificationSystem->notify("new_message", ["message" => "Hello, world!"]);

        $notificationSystem->unsubscribe($smsNotifier);

        $notificationSystem->notify("order_status_changed", ["order_id" => 123, "status" => "shipped"]);

        $this->expectOutputString(
            "EmailNotifier: Получил событие 'new_message'! Сообщение: {\"message\":\"Hello, world!\"}\n" .
            "SMSNotifier: Получил событие 'new_message'! Сообщение: {\"message\":\"Hello, world!\"}\n" .
            "EmailNotifier: Получил событие 'order_status_changed'! Сообщение: {\"order_id\":123,\"status\":\"shipped\"}\n"
        );
    }
}
