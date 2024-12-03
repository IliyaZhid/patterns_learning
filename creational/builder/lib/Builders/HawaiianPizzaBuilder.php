<?php

namespace Creational\Builder\Builders;

use Creational\Builder\Products\Pizza;

class HawaiianPizzaBuilder implements IPizzaBuilder
{
    private Pizza $pizza;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->pizza = new Pizza();
        $this->pizza->setName("Гавайская");
    }

    public function setSize(string $size): void
    {
        $this->pizza->setSize($size);
    }

    public function setDough(string $dough): void
    {
        $this->pizza->setDough($dough);
    }

    public function setSauce(string $sauce): void
    {
        $this->pizza->setSauce($sauce);
    }

    public function setTopping(string $topping): void
    {
        $this->pizza->setTopping($topping);
    }

    public function addExtraIngredient(string $ingredient): void
    {
        $this->pizza->addExtraIngredient($ingredient);
    }

    public function build(): Pizza
    {
        return $this->pizza;
    }
}
