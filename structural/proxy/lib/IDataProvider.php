<?php

namespace Structural\Proxy;

interface IDataProvider
{
    public function getData(string $key): array;
}
