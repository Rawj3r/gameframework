<?php

class Game{

    public $player = array();
    public $bot = array();

	public function __construct(){

		echo "Game started <br>";
	}

    public function import($object){
        $object = (object) $object;
        $type = get_class($object);
        $playerOrBot = strtolower($type);

        //build object
        $name = $object->getName();
        $name = strtolower($name);
        $hp = $object->getHp();
        $dmg = $object->getDmg();

        $this->{$playerOrBot}[$name] = new $type($this, $name);
        $this->{$playerOrBot}[$name]->setHp($hp);
        $this->{$playerOrBot}[$name]->setdmg($dmg);

        echo $this->{$playerOrBot}[$name];
    }

    public function create($type, $name){

        $type = strtolower($type);


        if(isset($this->player[$name]) || isset($this->bot[$name])) {
            echo "{$name} is allready taken<br/>";

            return false;
        }

        switch($type){
            case 'player':
                $this->player[$name] = new Player($this, $name);
                break;
            case 'bot':
                $this->bot[$name] = new Bot($this, $name);
                break;
            default:
                echo "Cannot create character";
        }
    }

}