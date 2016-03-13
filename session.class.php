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
}