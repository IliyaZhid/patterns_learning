<?php

require_once __DIR__ . '/vendor/autoload.php';

use Creational\Singleton\AppSettings;

$appSettings = new AppSettings();

$appSettings->set('app_name', 'MyApp');
$appSettings->set('version', '1.0.0');
$appSettings->set('debug_mode', true);

$settings = $appSettings->getAll();

echo "Настройки приложения:\n";
foreach ($settings as $key => $value) {
    echo "- $key: $value\n";
}
