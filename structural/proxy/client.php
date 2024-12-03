<?php
require_once __DIR__ . '/vendor/autoload.php';

use Structural\Proxy\DatabaseDataProvider;
use Structural\Proxy\CacheProxy;

$dataProvider = new CacheProxy(new DatabaseDataProvider());

$data = $dataProvider->getData("user_777");
print_r($data);

$data = $dataProvider->getData("user_777");
print_r($data);
