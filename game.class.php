<?php

class Game{

	public function __construct(){

		echo "Game started <br>";
	}

    public function createPlayer($name){

        $this->player = new Player($this, $name);

    }

    public function createBot($name){

        $this->bot = new Bot($this, $name);

    }

    public function setPlayerHP($int){

        $this->player->setHP($int);

    }

    public function setPlayerDMG($int){

        $this->player->setDMG($int);

    }

    public function showPlayer(){

        echo $this->player;

    }

    public function showBot(){

        echo $this->bot;
    }
}