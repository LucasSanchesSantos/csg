<?php

class funcionarios
{   
    private $bd;
    public function __construct(){
        require_once(__DIR__.'../../class_conexao/class.conexao.php');
        $this->bd = new conexao();
    }

    public function extract_funcionarios()
    {
        $sql = 
        "SELECT s.* 
            ,t.descricao
        FROM suporte_team s 
        left join tipo_usuario t on t.id = s.id_contato_padrao
        ";
        $stmt = $this->bd->conecta()->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt;
    }
}