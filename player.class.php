<?php

class Player{

    private $name;
    private $hp;
    private $dmg;

    public function __construct(Game $game, $name){
        $this->name = $name;
        echo "Player {$this->name} was created<br>";
    }

    public function setHP($int){
        $this->hp = (int) $int;
    }

    public function setDMG($int){
        $this->dmg = (int) $int;
    }

    public function __toString(){
        return "Name: {$this->name} | HP: {$this->hp} | DMG:  {$this->dmg}";
    }
}