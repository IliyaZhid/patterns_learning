<?php

use Creational\Builder\Builders\PepperoniPizzaBuilder;
use Creational\Builder\Builders\MushroomPizzaBuilder;
use Creational\Builder\Builders\HawaiianPizzaBuilder;
use Creational\Builder\PizzaDirector;

require_once __DIR__ . '/vendor/autoload.php';

$arPizzasConfig = [
    [
        'BUILDER' => PepperoniPizzaBuilder::class,
        'SIZE' => 'Большая',
        'DOUGH' => 'Тонкое',
        'SAUCE' => "Томатный",
        'TOPPING' => "Пепперони",
        'EXTRA' =>  ["Оливки", "Перец"]
    ],
    [
        'BUILDER' => MushroomPizzaBuilder::class,
        'SIZE' => 'Средняя',
        'DOUGH' => 'Толстое',
        'SAUCE' => "Сливочный",
        'TOPPING' => "Буженина",
        'EXTRA' =>  ["Зелень", "Грибы"]
    ],
    [
        'BUILDER' => HawaiianPizzaBuilder::class,
        'SIZE' => 'Маленькая',
        'DOUGH' => 'Тонкое',
        'SAUCE' => "Белый",
        'TOPPING' => "Ананасы",
        'EXTRA' =>  ["Морепродукты", "Сыр"]
    ],
];

$director = new PizzaDirector();

foreach ($arPizzasConfig as $arPizzaConfig) {
    $builder = new $arPizzaConfig['BUILDER']();
    $director->construct(
        $builder,
        $arPizzaConfig['SIZE'],
        $arPizzaConfig['DOUGH'],
        $arPizzaConfig['SAUCE'],
        $arPizzaConfig['TOPPING'],
        $arPizzaConfig['EXTRA']
    );
    echo $builder->build();
}

