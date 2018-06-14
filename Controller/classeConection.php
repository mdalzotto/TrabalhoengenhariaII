<?php

define('USUARIO', 'root');
define('SENHA', 'root');
define('DB_NOME', 'trab_ads_132');

class classeConection

{
    private $conection;

    function __construct()
    {
        $this->conectar();
    }

    private function conectar()
    {
        try {
            $DB_NOME = "trab_ads_132";
            $this->conection = new PDO("mysql:host=localhost;dbname=" . $DB_NOME , USUARIO, SENHA);
            $this->conection->exec("SET CHARACTER SET utf8");
            $this->conection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->conection->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);

        } catch (PDOException $e) {
            echo 'Falha na Conexão: ' . $e->getMessage();
        }
    }

    public function executaQuery($sql, $dados)
    {
        $query = $this->conection->prepare($sql);
        return $query->execute($dados);
    }

    public function getLista($consulta)
    {

        $query = $this->conection->query($consulta);
        $lista = $query->fetchAll();
        return $lista;
    }


    public function getRegistro($consulta, $id)
    {
        $query = $this->conection->prepare($consulta);
        $result = $query->execute($id);
        if ($result == false) { //caso haja erro de sql
            print_r($this->conection->errorInfo()); //mostrabdo erro do PDO
//            $mensagem_erro = "Erro ao tentar processar a...";
//            require_once('error_page.php'); //enviando o erro para uma página de erro
//            die();
        }
        $registro = $query->fetch();
        return $registro;
    }

}

?>



