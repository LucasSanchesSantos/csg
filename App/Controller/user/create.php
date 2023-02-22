<?php

session_start();
if($_SESSION['id_tipo_usuario'] <> 3){
    header('location:/csg');
}

include '../../Model/class_consultas/class.valida.funcionario.existe.php';
include '../../Model/class_create/class.create_funcionario.php';

$obj_valida = new valida_funcionario;
$obj_create = new create_funcionario;

include '../../Views/components/head.php';
include '../../Views/components/create.php';
include '../../Views/components/footer.php';





if($_POST){
    $valida_funcionario_existe = $obj_valida->valida_funcionario_existe($_POST['id_usuario_sabium']);

    if($valida_funcionario_existe == false){
        echo '<script>alert("Usuário não existente no banco! Verifique o usuário e tente novamente.");</script>';
    }
    if($valida_funcionario_existe){
        foreach ($valida_funcionario_existe as $key => $row) {
        }
        $result_create = $obj_create->create_funcionario($_POST['id_usuario_sabium'],$_POST['id_tipo_usuario'],$row['usuario'],$_POST['senha']);
        
        if($result_create === false){
            echo '<script>alert("Registro não realizado, dentrar em contato com o desenvolvedor.");</script>';

        }if($result_create === true){
            echo '<script>alert("Usuário cadastrado com sucesso! O login de acesso é '.$row['usuario'].'");</script>';
        }
    }
}





?>