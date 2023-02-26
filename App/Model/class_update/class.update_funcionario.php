<?php

class update_funcionario
{   
    private $bd;
    public function __construct(){
        require_once(__DIR__.'../../class_conexao/class.conexao.php');
        $this->bd = new conexao();
    }

    public function update_funcionario($id_tipo_usuario,$nome,$ramal,$ddd,$telefone,$email,$id_contato_padrao,$foto,$id_situacao_cadastro,$id_usuario_csg)
    {       
    $sql = 
    "UPDATE INTO 
    usuario_csg 
    SET id_tipo_usuario = $id_tipo_usuario 
    ,nome = $nome
    ,ramal = $ramal
    ,ddd = $ddd
    ,telefone = $telefone
    ,email = $email
    ,id_contato_padrao = $id_contato_padrao
    ,foto = $foto
    ,id_situacao_cadastro = $id_situacao_cadastro
    where id_usuario_csg = $id_usuario_csg
    
     ";
    $statement = $this->bd->conecta()->prepare($sql);
    $resultado = $statement->execute();
        
    if ($resultado) {
        return true;
    }else{
        return false;
    }
    
    }
}