<?php     
$config = include("{$_SERVER['DOCUMENT_ROOT']}/csg/App/Controller/config/config.php");
include $config['CHECKLOGIN'];

$obj = new validaLogin;
session_start();
$obj->checkLogin();

if (isset($_GET['logout'])) {
    $obj->logout();
}

include 'App/Views/components/head.php';



include 'App/Views/components/footer.php';


?>