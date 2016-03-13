<?php

/**
 * Created by IntelliJ IDEA.
 * User: Nkosi RN
 * Date: 3/13/16
 * Time: 4:56 PM
 */
class Session{

    public function __construct(){
        session_start();
        echo "Session started<br>";
    }

    public function get($name){
        return unserialize($_SESSION[$name]);
    }

    public function register($name, $object){
        $_SESSION[$name] = serialize((object)$object);
    }

    public function show(){
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
    }

}