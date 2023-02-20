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
        "SELECT l.idusuario
            ,l.id_tipo_usuario
            ,u.* 
        FROM login l 
        left join usuario u on u.idusuario = l.idusuario
        WHERE l.usuario = '$usuario' 
        AND l.senha = '$senha'";
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

                header('location:/csg/index.php');
                $existe = true;
                return $existe;
            }
        }else{
            echo '<script>alert("Login ou senha inválido!");</script>';
        }
        
    }
}