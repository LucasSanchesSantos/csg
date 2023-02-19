<?php
$config = include("{$_SERVER['DOCUMENT_ROOT']}/redesocialgazin/Controller/config/config.php");

class login
{   
    private $bd;
    public function __construct(){
        require_once('./class_conexao/class.conexao.php');
        $this->bd = new conexao();
    }

    public function validaFuncionarioExiste($cpf,$senha)
    {
        $sql = "SELECT * FROM uer where cpf = $cpf";
        $stmt = $this->bd->conecta()->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        //verifica se o funcionário já existe no banco. Se sim, ele vai para o login, se não, ele vai verificar se existe na table gazin.
        if($stmt->rowCount() >= 1){
            $sql = "SELECT * FROM user WHERE cpf = $cpf AND senha = $senha";
            $stmt = $this->bd->conecta()->prepare($sql);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $rows = $stmt->rowCount();

            if($rows){
                foreach($stmt as $key => $value){
                    session_start();
                    $_SESSION["id"] = $value['id'];
                    $_SESSION["cpf"] = $value['cpf'];
                    $_SESSION["nome"] = $value['nome'];
                    $_SESSION["apelido"] = $value['apelido'];
                    $_SESSION["id_negocio"] = $value['id_negocio'];
                    $_SESSION['login'] = true;

                    $existe = true;
                    return $existe;

                }
            }else{
                echo '<script>alert("Login ou senha inválido");</script>';
            }
        }else{
            $sql = "SELECT * FROM table_gazin WHERE cnpj_cpf = $cpf and $cpf = $cpf";

            $stmt = $this->bd->conecta()->prepare($sql);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            if($stmt->rowCount() >= 1){
                $existe = false;
                return $stmt;
                return $existe;
                header('location: adefinir.php');
            }else{
                echo '<script>alert("Usuário não encontrado na base de dados.");</script>';
            }
        }
    }
}