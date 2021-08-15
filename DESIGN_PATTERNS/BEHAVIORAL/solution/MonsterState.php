<?php

require_once 'Monster.php';

interface MonsterState
{
    public function attack(Monster $monster) : void;
    
    public function setMonster(Monster $monster) : MonsterState;
}
