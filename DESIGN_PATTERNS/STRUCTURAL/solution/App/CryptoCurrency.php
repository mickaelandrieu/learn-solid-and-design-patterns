<?php

interface CryptoCurrency
{
    /**
     * Returns the value in Euros, suffixed by '€'
     *
     * @return string
     */
    public function getPrice() : string;
}
