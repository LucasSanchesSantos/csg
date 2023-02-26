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
            ,CONCAT('(',s.ddd,') ','9 ',left(right(s.telefone,8),4),'-',right(s.telefone,4)) as full_telefone
            ,c.descricao as contato_padrao
        FROM suporte_team s 
        left join contato_padrao c on c.id = s.id_contato_padrao
        ";
        $stmt = $this->bd->conecta()->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt;
    }
}