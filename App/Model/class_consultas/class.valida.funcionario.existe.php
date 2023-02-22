<?php

class valida_funcionario
{   
    private $bd;
    public function __construct(){
        require_once(__DIR__.'../../class_conexao/class.conexao.php');
        $this->bd = new conexao();
    }

    public function valida_funcionario_existe($id_usuario_sabium)
    {
        $sql = 
        "SELECT * 
        FROM usuario u 
        WHERE u.idusuario = $id_usuario_sabium
        ";
        $stmt = $this->bd->conecta()->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->rowCount();

        if($rows){
            return $stmt;
        }else{
            return false;
        }
    }
}