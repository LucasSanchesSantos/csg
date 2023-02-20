<?php
    include '../../Model/class_login/class.login.php';
	
	

    $config = include("{$_SERVER['DOCUMENT_ROOT']}/csg/App/Controller/config/config.php");
    $uri = $_SERVER['REQUEST_URI'];
    date_default_timezone_set('America/Sao_Paulo');
	
	if($_POST){
		$obj = new login;
        $obj->sigin($_POST['usuario'],$_POST['senha']);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?= $config['CSS']?>/head.css">
	<link rel="stylesheet" type="text/css" href="<?= $config['CSS']?>/main.css">
	
</head>

<body class="bg-light">
	<div class="container-login100">
		<div class="wrap-login100">
			<form class="login100-form validate-form" method="post">
				<span class="login100-form-title p-b-26">
					<img src="<?= $config['IMAGES']?>/logo57anos.png" width="190px">
				</span></br>
			
				<div class="wrap-input100 validate-input" >
					<input class="input100" type="text"  required="" name="usuario">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Enter password">
					<span class="btn-show-pass">
						<i class="zmdi zmdi-eye"></i>
					</span>
					<input class="input100" type="password" required="" name="senha">
					<span class="focus-input100" data-placeholder="Senha"></span>
				</div>

				<div class="container-login100-form-btn">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
