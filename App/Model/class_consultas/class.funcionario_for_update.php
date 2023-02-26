<?php

class consulta_funcionario_for_update
{   
    private $bd;
    public function __construct(){
        require_once(__DIR__.'../../class_conexao/class.conexao.php');
        $this->bd = new conexao();
    }

    public function consulta_funcionario_for_update()
    {
        $sql = 
        "SELECT u.* 
            ,CONCAT('(',u.ddd,') ','9 ',left(right(u.telefone,8),4),'-',right(u.telefone,4)) as full_telefone
            ,c.descricao as contato_padrao
            ,s.descricao as situacao_cadastro
            ,t.descricao as tipo_permissao
        FROM usuario_csg u 
        left join contato_padrao c on c.id = u.id_contato_padrao
        left join situacao_cadastro_csg s on s.id = u.id_situacao_cadastro_csg
        left join tipo_usuario t on t.id = u.id_tipo_usuario
        left join tipo_setor_funcionario ts on t.id = u.id_tipo_setor_funcionario
        where u.id_tipo_setor_funcionario = 2
        ";
        $stmt = $this->bd->conecta()->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt;
    }
}