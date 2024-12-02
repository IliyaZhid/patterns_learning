<?php

namespace Singleton;

class Settings implements ISettingsInterface
{
    private static ?Settings $instance = null;
    private array $settings = [];

    private function __construct() {}

    public static function getInstance(): Settings
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function set($key, $value): void
    {
        $this->settings[$key] = $value;
    }

    public function get($key)
    {
        return $this->settings[$key] ?? null;
    }

    public function getAll(): array
    {
        return $this->settings;
    }
}
