<?php

require_once __DIR__ . '/vendor/autoload.php';

use Creational\AbstractFactory\Factories\WindowsFactory;
use Creational\AbstractFactory\Factories\MacFactory;
use Creational\AbstractFactory\Factories\GUIFactory;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

switch ($_ENV['OS']) {
    case 'Windows' : {
        $factory = new WindowsFactory();
    }
    case 'Mac' : {
        $factory = new MacFactory();
    }
    default : {
        $factory = new WindowsFactory();
    }
}

function createUI(GUIFactory $factory): void
{
    $button = $factory->createButton();
    $checkbox = $factory->createCheckbox();

    $button->display();
    $checkbox->display();
}

echo "{$_ENV['OS']} UI:\n";
createUI($factory);

