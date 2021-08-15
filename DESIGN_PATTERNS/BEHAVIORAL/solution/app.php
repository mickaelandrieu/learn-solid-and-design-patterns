<?php

require_once 'Game.php';
require_once 'Bulbinar.php';
require_once 'Mondozor.php';

function it($m,$p){
    echo"\033[3",$p?'2m✔︎':'1m✘'.register_shutdown_function(function(){die(1);})," $m\033[0m\n";
}

$mondozor = new Mondozor();
$bulbinar = new Bulbinar();



it('Mondozor is stronger than Bulbinar', $result === 'Mondozor a gagné le combat ! ✨');

$game = new Game($mondozor, $bulbinar);
$result = $game->startGame();