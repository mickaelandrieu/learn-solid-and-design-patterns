<?php

interface PizzaBuilder
{
    /**
     * Starts a new pizza order
     *
     * @return PizzaBuilder
     */
    public function preparePizza() : PizzaBuilder;

    /**
     * Add an ingredient increase the cost (+1.5€)
     *
     * @param string $ingredient
     * @return PizzaBuilder
     */
    public function addIngredient(string $ingredient) : PizzaBuilder;

    /**
     * Increase the size of the pizza increase its price (+2.0€)
     *
     * @return PizzaBuilder
     */
    public function increaseSize() : PizzaBuilder;

    /**
     * Not required by the design pattern, depends of the project
     *
     * @return Pizza
     */
    public function getPizza() : Pizza;
}
