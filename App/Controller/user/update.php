<?php

session_start();
if($_SESSION['id_tipo_usuario'] <> 3){
    header('location:/csg');
}

include '../../Model/class_consultas/class.funcionario.php';
include '../../Model/class_consultas/class.funcionario_for_update.php';

include '../../Model/class_create/class.create_funcionario.php';

include '../../Model/class_update/class.update_funcionario.php';


$obj_funcionario = new funcionarios;
$obj_funcionario_for_update = new consulta_funcionario_for_update;
$obj_update_funcionario = new update_funcionario;



$_SESSION['array'] = $obj_funcionario->extract_funcionarios();
$_SESSION['array_update'] = $obj_funcionario_for_update->consulta_funcionario_for_update($_GET['id_usuario_csg']);


include '../../Views/components/head.php';
include '../../Views/funcionario/update.php';
include '../../Views/components/footer.php';





if($_POST){
    $obj_update_funcionario->update_funcionario(
        $_POST['id_tipo_usuario'],$_POST['nome'],$_POST['ramal'],$_POST['ddd'],$_POST['telefone'],$_POST['email']
        ,$_POST['id_contato_padrao'],$_POST['foto'],$_POST['id_situacao_cadastro'],$_POST['id_usuario_csg']
    );
}



?>