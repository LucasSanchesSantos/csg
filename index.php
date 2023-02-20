<?php     
$config = include("{$_SERVER['DOCUMENT_ROOT']}/csg/App/Controller/config/config.php");
include $config['CHECKLOGIN'];

$obj = new validaLogin;
session_start();
$obj->checkLogin();


include 'App/Views/components/head.php';



include 'App/Views/components/footer.php';


?>