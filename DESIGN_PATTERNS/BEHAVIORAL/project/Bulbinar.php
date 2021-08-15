<?php

require_once 'Monster.php';
require_once 'MonsterState.php';
require_once 'States/Healthy.php';

final class Bulbinar implements Monster
{
    /** @var MonsterState */
    private $state;

    public $healthPoints;
    
    public function __construct()
    {
        $this->changeState(new Healthy());
        $this->healthPoints = 60;
    }

    public function name() : string
    {
        return 'Bulbinar';
    }

    public function health() : int
    {
        return $this->healthPoints;
    }

    public function strength() : int
    {
        return 19;
    }

    public function attack(Monster $monster) : void
    {
        $this->state->attack($monster);
    }

    public function changeState(MonsterState $state) : Monster
    {
        $this->state = $state;
        $this->state->setMonster($this);
        
        return $this;
    }

    public function isDead() : bool
    {
        return $this->healthPoints <= 0;
    }
}
