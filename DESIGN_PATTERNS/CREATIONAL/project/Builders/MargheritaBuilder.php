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
        /**
         * @TODO : ajouter l'ingrédient et augmenter le prix de 1,5€
         */

        return $this;
    }

    public function increaseSize() : PizzaBuilder
    {
        /**
         * @TODO : il faut changer la taille de la pizza de "M" à "XL"
         */
        return $this;
    }

    public function getPizza() : Pizza
    {
        return $this->pizza;
    }
}
