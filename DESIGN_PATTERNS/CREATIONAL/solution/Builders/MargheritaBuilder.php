<?php

require_once './Builders/PizzaBuilder.php';
require_once './Pizzas/Margherita.php';

class MargheritaBuilder implements PizzaBuilder
{
    private $pizza;

    public function preparePizza() : PizzaBuilder
    {
        $this->pizza = new Margherita();

        return $this;
    }

    public function addIngredient(string $ingredient) : PizzaBuilder
    {
        $this->pizza->addIngredient($ingredient, 1.5);

        return $this;
    }

    public function increaseSize() : PizzaBuilder
    {
        $this->pizza->setSize('XL');
        return $this;
    }

    public function getPizza() : Pizza
    {
        return $this->pizza;
    }
}
