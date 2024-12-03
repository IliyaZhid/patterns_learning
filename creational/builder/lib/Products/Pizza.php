<?php

namespace Creational\Builder\Products;

class Pizza
{
    private string $name;
    private string $size;
    private string $dough;
    private string $sauce;
    private string $topping;
    private array $extra;

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setSize(string $size): void
    {
        $this->size = $size;
    }

    public function setDough(string $dough): void
    {
        $this->dough = $dough;
    }

    public function setSauce(string $sauce): void
    {
        $this->sauce = $sauce;
    }

    public function setTopping(string $topping): void
    {
        $this->topping = $topping;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function getDough(): string
    {
        return $this->dough;
    }

    public function getSauce(): string
    {
        return $this->sauce;
    }

    public function getTopping(): string
    {
        return $this->topping;
    }

    public function getExtraIngredients(): array
    {
        return $this->extra;
    }

    public function addExtraIngredient(string $ingredient): void
    {
        $this->extra[] = $ingredient;
    }

    public function __toString(): string
    {
        return "Пицца \"{$this->name}\":\n" .
            "- Размер: {$this->size}\n" .
            "- Тесто: {$this->dough}\n" .
            "- Соус: {$this->sauce}\n" .
            "- Начинка: {$this->topping}\n" .
            "- Дополнительные ингредиенты: " . implode(", ", $this->extra) . PHP_EOL;
    }
}
