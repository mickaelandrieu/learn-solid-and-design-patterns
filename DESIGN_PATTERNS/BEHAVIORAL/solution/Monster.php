<?php

require_once 'MonsterState.php';

interface Monster
{
    public function name() : string;

    public function health() : int;

    public function strength() : int;

    public function attack(Monster $monster) : void;
   
    public function changeState(MonsterState $state) : Monster;

    public function isDead() : bool;
}
