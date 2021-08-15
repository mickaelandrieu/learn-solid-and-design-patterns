<?php

require_once 'PushEvent.php';
require_once 'WatchEvent.php';

function it($m,$p){
    echo"\033[3",$p?'2m✔︎':'1m✘'.register_shutdown_function(function(){die(1);})," $m\033[0m\n";
}

$push = new PushEvent();
$watch = new WatchEvent();

it('Push OK', $push->name() === 'PushEvent');
it('Watch OK', $watch->name() === 'WatchEvent');
