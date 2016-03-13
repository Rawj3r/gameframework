<?php

class Bot extends Character{

    public function __construct(Game $game, $name){
        $this->name = $name;
        echo "Bot {$this->name} was created<br>";
    }

}