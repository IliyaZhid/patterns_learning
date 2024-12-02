<?php

namespace Singleton;

interface ISettingsInterface
{
    public function set($key, $value): void;

    public function get($key);

    public function getAll(): array;
}
