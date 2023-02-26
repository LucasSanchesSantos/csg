<?php
    $config = include("{$_SERVER['DOCUMENT_ROOT']}/csg/App/Controller/config/config.php");
    $uri = $_SERVER['REQUEST_URI'];
    date_default_timezone_set('America/Sao_Paulo');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CSG</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= $config['URL'] ?>/App/Views/css/head.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body class="bg-light">
    <nav class="navbar bg-dark-blue shadow">
        <div class="container-fluid">
            <div class="d-flex align-items-center">
                <button class="navbar-toggler bg-white me-2 shadow" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand text-white fw-bold fs-4 m-0 d-flex align-middle" href="/csg"><img src="<?= $config['URL'] ?>/App/Views/images/logo56anos.png" width="190px"></a>
            </div>
            <div class="d-flex align-items-center">
                <div class="btn-group">
                    <button type="button" class="d-flex align-items-center btn text-white border-0 p-0" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle fs-4 me-1"></i> <?= $_SESSION['nome'] ?>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a href="<?= $config['URL'] ?>" class="dropdown-item text-end" type="button">
                                Usuário<i class="bi bi-person-gear ms-1"></i>
                            </a>
                            <a href="?logout" class="dropdown-item text-end" type="button">
                                Sair<i class="bi bi-box-arrow-right ms-1"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="offcanvas offcanvas-start bg-light" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header bg-dark-blue shadow">
                    <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div>
                    <ul class="navbar-nav justify-content-end flex-grow-1">
                        <?php if ($_SESSION['id_tipo_usuario'] == 3) { ?>
                            <li class="nav-item">
                                <a class="nav-link px-3 border-bottom <?= $uri === '/csg/App/Controller/user/view.php' ? 'active' : '' ?>" href="<?= $config['URL'] ?>/App/Controller/user/view.php"><i class="bi bi-journal-text me-2"></i>Novo cadastro</a>
                            </li>
                       
                        <?php } ?>

                    </ul>
                </div>
            </div>
        </div>
    </nav>

<div class="bg-white div-content rounded shadow-lg">
