<?php

require_once 'Monster.php';
require_once 'MonsterState.php';
require_once 'States/Healthy.php';

final class Sleepy implements MonsterState
{
    /** @var Monster */
    private $monster;
    
    public function attack(Monster $monster) : void
    {
        echo $this->monster->name() . ' est endormi ...' . PHP_EOL;

        $this->monster->changeState(new Healthy());
    }

    public function setMonster(Monster $monster) : MonsterState
    {
        $this->monster = $monster;
        
        return $this;
    }
}
