<?php
include 'App/Model/class_consultas/class.funcionario.php';


$obj = new funcionarios;
$_SESSION['array'] = $obj->extract_funcionarios();

include 'App/Views/components/home.php';