<?php

class login
{   
    private $bd;
    public function __construct(){
        require_once(__DIR__.'../../class_conexao/class.conexao.php');
        $this->bd = new conexao();
    }

    public function sigin($usuario,$senha)
    {
        $sql = 
        "SELECT u.*
            ,t.descricao as tipo_usuario
        FROM usuario_csg u 
        left join usuario us on us.idusuario = u.id_usuario_sabium
        left join tipo_usuario t on t.id = u.id_tipo_usuario
        WHERE u.usuario = '$usuario' 
        AND u.senha = '$senha'";
        $stmt = $this->bd->conecta()->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->rowCount();

        if($rows){
            foreach($stmt as $key => $value){
                session_start();
                $_SESSION["idusuario"] = $value['idusuario'];
                $_SESSION["nome"] = $value['nome'];
                $_SESSION["id_tipo_usuario"] = $value['id_tipo_usuario'];
                $_SESSION['login'] = true;
                $_SESSION['tipo_usuario'] = $value['tipo_usuario'];

                header('location:/csg/index.php');
                $existe = true;
                return $existe;
            }
        }else{
            echo '<script>alert("Login ou senha inválido!");</script>';
        }
        
    }
}