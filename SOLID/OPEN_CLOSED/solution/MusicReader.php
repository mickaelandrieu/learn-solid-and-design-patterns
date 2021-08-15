<?php

// Si on ajoute un nouveau format, cette classe ne change plus :-)
class MusicReader
{
    private $musicType;

    public function __construct(MusicType $musicType)
    {
        $this->musicType = $musicType;
    }

    public function listen()
    {
        return $this->musicType->listen();
    }
}