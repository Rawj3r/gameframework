<?php

class Player extends Character{

    public function __construct(Game $game, $name){
        $this->name = $name;
        echo "Player {$this->name} was created<br>";
    }


}