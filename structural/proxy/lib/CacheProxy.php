<?php

namespace Structural\Proxy;

class CacheProxy implements IDataProvider
{
    private IDataProvider $dataProvider;
    private array $cache = [];

    public function __construct(IDataProvider $dataProvider)
    {
        $this->dataProvider = $dataProvider;
    }

    public function getData(string $key): array
    {
        if (!isset($this->cache[$key])) {
            $this->cache[$key] = $this->dataProvider->getData($key);
        } else {
            echo "Получение данных из кэша по ключу: $key\n";
        }

        return $this->cache[$key];
    }
}
