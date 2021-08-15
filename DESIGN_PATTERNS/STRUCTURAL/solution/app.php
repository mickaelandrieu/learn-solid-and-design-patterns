<?php

require_once 'App/Application.php';
require_once 'App/Bitcoin.php';
require_once 'App/Ethereum.php';
require_once 'App/Adapters/SuccessCoinAdapter.php';

require_once 'OC/SuccessCoin.php';


function it($m,$p){
    echo"\033[3",$p?'2m✔︎':'1m✘'.register_shutdown_function(function(){die(1);})," $m\033[0m\n";
}

$bitcoin = new Bitcoin();
$ethereum = new Ethereum();
$successCoin = new SuccessCoinAdapter(new SuccessCoin());

$myApp = new Application([
    $bitcoin,
    $ethereum,
    $successCoin,
]);


it('Displays Bitcoin Value', $myApp->displayPrice('BTC') === '70 000 €');
it('Displays Ethereum Value', $myApp->displayPrice('ETH') === '2 300 €');
it('Displays Success Coin Value', $myApp->displayPrice('SC') === '240 €');
