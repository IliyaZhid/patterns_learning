<?php

namespace Creational\Singleton;

class AppSettings
{
    private Settings $settings;

    public function __construct()
    {
        $this->settings = Settings::getInstance();
    }

    public function set($key, $value): void
    {
        $this->settings->set($key, $value);
    }

    public function get($key)
    {
        return $this->settings->get($key);
    }

    public function getAll(): array
    {
        return $this->settings->getAll();
    }
}
