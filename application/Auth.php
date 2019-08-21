<?php


class Auth
{
    static function isLogged(){
        if(isset($_SESSION['auth']) && isset($_SESSION['auth']['user']) && isset($_SESSION['auth']['id']) && isset($_SESSION['auth']['type'])){
            return true;
        }else{
            return false;
        }
    }
}