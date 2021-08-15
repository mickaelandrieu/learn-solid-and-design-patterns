<?php

require_once 'Monster.php';
require_once 'MonsterState.php';

final class Crazy implements MonsterState
{
    /** @var Monster */
    private $monster;
    
    public function attack(Monster $monster) : void
    {
        // un pourcentage de chance de se blesser
        
        if ($this->isTooMuchCrazy())
        {
            // Le monstre se blesse tout seul !
            $this->monster->healthPoints -= $this->monster->strength();
            
            echo $this->monster->name() . ' est fou et s\'inflige des dégats' . PHP_EOL;
        } else {
            $monster->healthPoints -= $this->monster->strength();
        
            echo $this->monster->name() . ' attaque malgré sa folie' . PHP_EOL;
        }
        
    }

    public function setMonster(Monster $monster) : MonsterState
    {
        $this->monster = $monster;
        
        return $this;
    }

    private function isTooMuchCrazy() : bool
    {
        return (bool) rand(1, 100) > 60;
    }
}