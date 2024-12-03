<?php
require_once __DIR__ . '/vendor/autoload.php';

use Behavioral\Observer\Subscribers\EmailNotifier;
use Behavioral\Observer\Subscribers\SMSNotifier;
use Behavioral\Observer\Publishers\NotificationSystem;

$notificationSystem = new NotificationSystem();

$emailNotifier = new EmailNotifier();
$smsNotifier = new SMSNotifier();

$notificationSystem->subscribe($emailNotifier);
$notificationSystem->subscribe($smsNotifier);

$notificationSystem->notify("new_message", ["message" => "Hello, world!"]);

$notificationSystem->unsubscribe($smsNotifier);

$notificationSystem->notify("order_status_changed", ["order_id" => 123, "status" => "Новый"]);
