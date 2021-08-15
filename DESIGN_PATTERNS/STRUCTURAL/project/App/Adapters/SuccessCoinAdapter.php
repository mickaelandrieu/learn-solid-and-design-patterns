<?php

require_once './OC/SuccessCoin.php';

// @TODO 1: Inclure et implémenter l'interface CryptoCurrency
class SuccessCoinAdapter
{
    private $coin;

    public function __construct()
    {
        // @TODO 2 : Inclure la classe SuccessCoin
    }

    public function getName() : string
    {
        // @TODO 3 : Récupérer le nom de la crypto monnaie à partir de la classe d'OpenClassrooms ?
        return '[@TODO]';
    }

    public function getPrice() : string
    {
        // @TODO 4 : Convertir dans le bon format
        return '[@TODO]';
    }
}