<?php

class Application
{
    private array $cryptos = [];

    public function __construct(array $cryptos)
    {
        foreach ($cryptos as $crypto) {
            if (is_subclass_of($crypto, CryptoCurrency::class)) {
                $this->cryptos[$crypto->getName()] = $crypto;
            }
        }
    }

    public function displayPrice(string $cryptoName) : string
    {
        if (in_array($cryptoName, array_keys($this->cryptos))) {
            return $this->cryptos[$cryptoName]->getPrice();
        }
        
        return '[Crypto NOT FOUND]';
    }
}
