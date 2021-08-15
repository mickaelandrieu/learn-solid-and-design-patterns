<?php

require_once './OC/SuccessCoin.php';
require_once './App/CryptoCurrency.php';

class SuccessCoinAdapter implements CryptoCurrency
{
    private $coin;

    public function __construct(SuccessCoin $coin)
    {
        $this->coin = $coin;
    }

    public function getName() : string
    {
        return SuccessCoin::NAME;
    }

    public function getPrice() : string
    {
        return (string) $this->convertDollarsToEuros($this->coin->getValue()) . ' €';
    }

    private function convertDollarsToEuros(int $dollars) : float
    {
        return (float) $dollars * 1.2;
    }
}