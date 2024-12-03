<?php

use PHPUnit\Framework\TestCase;
use Structural\Proxy\DatabaseDataProvider;
use Structural\Proxy\CacheProxy;

class ProxyTest extends TestCase
{
    public function testProxy()
    {
        $dataProvider = new CacheProxy(new DatabaseDataProvider());

        $data = $dataProvider->getData("user_123");
        $this->assertEquals(["id" => "user_123", "name" => "Iliya Zhidkikh", "email" => "iliyazhid@notmail.com"], $data);

        $data = $dataProvider->getData("user_123");
        $this->assertEquals(["id" => "user_123", "name" => "Iliya Zhidkikh", "email" => "iliyazhid@notmail.com"], $data);

        $this->expectOutputString(
            "Запрос из базы по ключу: user_123\n" .
            "Получение данных из кэша по ключу: user_123\n"
        );
    }
}
