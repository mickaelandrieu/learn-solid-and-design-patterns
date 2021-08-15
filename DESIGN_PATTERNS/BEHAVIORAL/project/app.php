<?php

require_once 'Game.php';
require_once 'Bulbinar.php';
require_once 'Mondozor.php';

/**
 * Jeu de combat entre monstres !
 * Les états possibles des monstres sont ajoutés de manière aléatoire.
 */
$mondozor = new Mondozor();
$bulbinar = new Bulbinar();

$game = new Game($mondozor, $bulbinar);
$result = $game->startGame();
