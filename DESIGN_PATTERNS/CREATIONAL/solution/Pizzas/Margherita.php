<?php

require_once './Pizzas/Pizza.php';

class Margherita extends Pizza
{
    public function __construct()
    {
        $this->base = 'tomate';
        $this->price = 12.0;
        $this->ingredients = ['mozzarella', 'basilic', "huile d'olive"];
    }
    
}
