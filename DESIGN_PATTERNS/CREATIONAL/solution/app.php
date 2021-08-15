<?php

require_once './Directors/Pizzaiolo.php';
require_once './Builders/MargheritaBuilder.php';

function it($m,$p){
    echo"\033[3",$p?'2m✔︎':'1m✘'.register_shutdown_function(function(){die(1);})," $m\033[0m\n";
}

$pizzaiolo = new Pizzaiolo(new MargheritaBuilder());

$basicPizza = $pizzaiolo->createMargherita();
$basicPizzaWithEgg = $pizzaiolo->createMargheritaWithEgg();

$bigPizza = $pizzaiolo->createBigMargherita();
$bigPizzaWithEgg = $pizzaiolo->createBigMargheritaWithEgg();

it('Order a basic pizza', $basicPizza->getIngredients() == ['mozzarella', 'basilic', "huile d'olive"]);
it('Order a big pizza', $bigPizza->getSize() === 'XL');

it('Order an Egg : added in ingredients', in_array('egg', $basicPizzaWithEgg->getIngredients()));
it('Order an Egg : costs 1.5€', ($basicPizzaWithEgg->getPrice() - $basicPizza->getPrice()) === 1.5);
