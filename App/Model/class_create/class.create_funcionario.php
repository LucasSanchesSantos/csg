<?php

class create_funcionario
{   
    private $bd;
    public function __construct(){
        require_once(__DIR__.'../../class_conexao/class.conexao.php');
        $this->bd = new conexao();
    }

    public function create_funcionario($id_usuario_sabium,$id_tipo_usuario,$usuario,$senha)
    {       
    $sql = "INSERT INTO usuario_csg VALUES (0,$id_usuario_sabium,0,$id_tipo_usuario,'$usuario','$senha',0)";
    $statement = $this->bd->conecta()->prepare($sql);
    $resultado = $statement->execute();
        
    if ($resultado) {
        return true;
    }else{
        return false;
    }
    
    }
}