<?php

require_once 'Monster.php';
require_once 'MonsterState.php';

final class Healthy implements MonsterState
{
    /** @var Monster */
    private $monster;
    
    public function attack(Monster $monster) : void
    {
        $monster->healthPoints -= $this->monster->strength();

        echo $this->monster->name() . ' attaque !' . PHP_EOL;
    }

    public function setMonster(Monster $monster) : MonsterState
    {
        $this->monster = $monster;
        
        return $this;
    }
}
