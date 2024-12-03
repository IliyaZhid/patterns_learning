<?php

namespace Structural\Proxy;

class DatabaseDataProvider implements IDataProvider
{
    public function getData(string $key): array
    {
        echo "Запрос из базы по ключу: $key\n";
        return ["id" => $key, "name" => "Iliya Zhidkikh", "email" => "iliyazhid@notmail.com"];
    }
}
