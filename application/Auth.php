<?php


class Auth
{
    static function isLogged(){
        if(isset($_SESSION['auth']) && isset($_SESSION['auth']['user']) && isset($_SESSION['auth']['id'])){
            return true;
        }else{
            return false;
        }
    }
}