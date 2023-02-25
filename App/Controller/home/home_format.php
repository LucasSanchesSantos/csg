<?php
session_start();
include '../../Model/class_consultas/class.funcionario.php';

$obj = new funcionarios;
$array = $obj->extract_funcionarios();
foreach($array as $key => $_SESSION['array']){}
