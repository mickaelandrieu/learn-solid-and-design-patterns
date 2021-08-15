<?php

class Pizzaiolo
{
    private PizzaBuilder $pizzaBuilder;

    public function __construct(PizzaBuilder $pizzaBuilder)
    {
        $this->pizzaBuilder = $pizzaBuilder;
    }

    public function createMargherita() : Pizza
    {
        return $this->pizzaBuilder->preparePizza()->getPizza();
    }

    public function createMargheritaWithEgg() : Pizza
    {
        return $this->pizzaBuilder
            ->preparePizza()
            ->addIngredient('egg')
            ->getPizza()
        ;
    }

    public function createBigMargherita()
    {
        return $this->pizzaBuilder
            ->preparePizza()
            ->increaseSize()
            ->getPizza()
        ;
    }

    public function createBigMargheritaWithEgg()
    {
        return $this->pizzaBuilder
            ->preparePizza()
            ->increaseSize()
            ->addIngredient('egg')
            ->getPizza()
        ;
    }
}
