<?php

use PHPUnit\Framework\TestCase;
use Singleton\Settings;

class SettingsTest extends TestCase
{
    public function testSingletonInstance()
    {
        $settings1 = Settings::getInstance();
        $settings2 = Settings::getInstance();

        $this->assertSame($settings1, $settings2);
    }

    public function testSetAndGetSettings()
    {
        $settings = Settings::getInstance();

        $settings->set('app_name', 'MyApp');
        $settings->set('version', '1.0.0');
        $settings->set('debug_mode', true);

        $this->assertEquals('MyApp', $settings->get('app_name'));
        $this->assertEquals('1.0.0', $settings->get('version'));
        $this->assertTrue($settings->get('debug_mode'));
    }

    public function testGetAllSettings()
    {
        $settings = Settings::getInstance();

        $settings->set('app_name', 'MyApp');
        $settings->set('version', '1.0.0');
        $settings->set('debug_mode', true);

        $allSettings = $settings->getAll();

        $this->assertArrayHasKey('app_name', $allSettings);
        $this->assertArrayHasKey('version', $allSettings);
        $this->assertArrayHasKey('debug_mode', $allSettings);
    }
}
