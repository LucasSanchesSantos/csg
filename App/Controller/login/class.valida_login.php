<?php

class validaLogin
{
    public function checkLogin(){
        if(!isset($_SESSION["login"]) or $_SESSION["login"] == false){
            header('location:/csg/App/Views/components/login.php');
        }
    }

    public function logout(){
        session_destroy();
        $_SESSION['login'] = false;
        header('location:/csg/App/Views/components/login.php');
    }
}