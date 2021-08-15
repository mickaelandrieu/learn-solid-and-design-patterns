<?php

require_once './App/CryptoCurrency.php';

class Bitcoin implements CryptoCurrency
{
    public function getName() : string
    {
        return 'BTC';
    }

    public function getPrice() : string
    {
        return '70 000 €';
    }
}
