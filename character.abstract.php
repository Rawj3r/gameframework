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

    public function getDmg(){
        return $this->dmg;
    }

    public function getHp(){
        return $this->hp;
    }



    public function battle($defender){

        // get defender data
        $defender = (object) $defender;
        $hp = $defender->getHp();

        //get attacker data
        $dmg = $this->getDmg();

        $defender->setHP($hp-$dmg);

        echo "Defender has {$defender->getHp()} HP";
    }

    public function show(){
        echo $this;
    }

    public function __toString(){
        return "Name: {$this->name} | HP: {$this->hp} | DMG:  {$this->dmg}<br>";
    }



}