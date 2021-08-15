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
            // @TODO : le monstre se blesse tout seule, du fait de sa propre force...

            
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
        // @TODO : retourner une condition aléatoire (cf fonction rand() de PHP)
        return true;
    }
}