<?php

require_once 'States/Crazy.php';
require_once 'States/Healthy.php';
require_once 'States/Sleepy.php';

class Game
{
    private $monster1;
    private $monster2;

    public function __construct(Monster $monster1, Monster $monster2)
    {
        $this->monster1 = $monster1;
        $this->monster2 = $monster2;
    }

    public function startGame()
    {
        $states = [
            new Healthy(),
            new Sleepy(),
            new Crazy(),
        ];

        while (! $this->monster1->isDead() || ! $this->monster1->isDead()) {
            $this->monster1->attack($this->monster2);
            $this->monster2->attack($this->monster1);

            $this->monster1->changeState($states[array_rand($states, 1)]);
            $this->monster2->changeState($states[array_rand($states, 1)]);

        }

        if ($this->monster1->isDead()) {
            echo $this->monster1->name() . ' a gagné le combat ! ✨';
        } else {
            echo $this->monster2->name() . ' a gagné le combat ! ✨';
        }
    }
}
