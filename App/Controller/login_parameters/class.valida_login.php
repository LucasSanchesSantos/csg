<?php

    $config = include("{$_SERVER['DOCUMENT_ROOT']}/redesocialgazin/Controller/config/config.php");

class validaLogin
{
    public function checkLogin(){
        if(!isset($_SESSION["login"]) or $_SESSION["login"] == false){
            header('location:'.$config['login']);
        }
    }

    public function logout(){
        session_destroy();
        $_SESSION['login'] = false;
        header('location:'.$config['login']);
    }
}