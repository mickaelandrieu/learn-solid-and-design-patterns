<?php

require_once './App/CryptoCurrency.php';

class Ethereum implements CryptoCurrency
{
    public function getName() : string
    {
        return 'ETH';
    }

    public function getPrice() : string
    {
        return '2 300 €';
    }
}
