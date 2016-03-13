<?php

abstract class Character{

    protected $name;
    protected $hp;
    protected $dmg;

    public function setHP($int){
        $this->hp = (int) $int;
    }

    public function setDMG($int){
        $this->dmg = (int) $int;
    }

    public function show(){
        echo $this;
    }

    public function battle($defender){
        $defender = (object) $defender;

    }

    public function __toString(){
        return "Name: {$this->name} | HP: {$this->hp} | DMG:  {$this->dmg}<br>";
    }



}