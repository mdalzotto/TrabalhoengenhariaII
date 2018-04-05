<?php

$host = "localhost";
//$bdtipo = "mysql";
$bdtipo ='mysql';
$dbnome = "trabalhoWeb";

if($bdtipo == 'mysql'){
    $user = "root";
    $senha = "root";
} else if($bdtipo == 'pgsql'){
    $user = "postgres";
    $senha = "masterkey";
}

try {
    $conection = new PDO($bdtipo . ':host=' . $host . ';dbname=' . $dbnome, $user, $senha);
} catch (PDOException $ex) {
    echo 'Falha na conexão ' .$ex->getTraceAsString();
}


?>