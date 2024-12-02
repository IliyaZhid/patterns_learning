<?php

namespace Builder;

use Builder\Builders\IPizzaBuilder;

class PizzaDirector
{
    public function construct(IPizzaBuilder $builder, $size, $dough, $sauce, $topping, $extraIngredients = [])
    {
        $builder->setSize($size);
        $builder->setDough($dough);
        $builder->setSauce($sauce);
        $builder->setTopping($topping);
        foreach ($extraIngredients as $ingredient) {
            $builder->addExtraIngredient($ingredient);
        }
    }
}
