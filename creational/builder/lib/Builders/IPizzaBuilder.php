<?php

namespace Builder\Builders;

interface IPizzaBuilder
{
    public function reset();
    public function setSize(String $size);
    public function setDough(String $dough);
    public function setSauce(String $sauce);
    public function setTopping(String $topping);
    public function addExtraIngredient(String $ingredient);
    public function build();
}
