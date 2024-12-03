<?php

use PHPUnit\Framework\TestCase;
use Creational\Builder\Builders\PepperoniPizzaBuilder;
use Creational\Builder\Builders\MushroomPizzaBuilder;
use Creational\Builder\Builders\HawaiianPizzaBuilder;
use Creational\Builder\PizzaDirector;

class PizzaBuilderTest extends TestCase
{
    private $arPizzasConfig = [
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

    public function testPizzaBuilders()
    {
        $director = new PizzaDirector();

        foreach ($this->arPizzasConfig as $arPizzaConfig) {
            $builder = new $arPizzaConfig['BUILDER']();
            $director->construct(
                $builder,
                $arPizzaConfig['SIZE'],
                $arPizzaConfig['DOUGH'],
                $arPizzaConfig['SAUCE'],
                $arPizzaConfig['TOPPING'],
                $arPizzaConfig['EXTRA']
            );
            $pizza = $builder->build();

            $this->assertEquals($arPizzaConfig['SIZE'], $pizza->getSize());
            $this->assertEquals($arPizzaConfig['DOUGH'], $pizza->getDough());
            $this->assertEquals($arPizzaConfig['SAUCE'], $pizza->getSauce());
            $this->assertEquals($arPizzaConfig['TOPPING'], $pizza->getTopping());
            $this->assertEquals($arPizzaConfig['EXTRA'], $pizza->getExtraIngredients());
        }
    }
}
