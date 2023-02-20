<?php 

class conexao
{
    public static $pdo;
    public $host;
    public $database;
    public $user;
    public $password;

    public function __construct()
    {
        $this->host = 'localhost';
        $this->database = 'csg';
        $this->user = 'root';
        $this->password = '';
    }
    public function conecta()
    {
        try{
            if(!static::$pdo){
                $dsn = 'mysql:host='.$this->host.';dbname='.$this->database;
                $opcoes = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
                static::$pdo = new PDO($dsn, $this->user, $this->password, $opcoes);
            }
            return static::$pdo;
        }catch (PDOException $erro) {
            die("Erro ao conectar ao banco ".$erro->getMessage());
        }
    }
}