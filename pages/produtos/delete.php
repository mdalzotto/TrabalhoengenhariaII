<?php

require_once('../conexao.php');

try {

    $delete = 'DELETE FROM produtos where id= :id';

    $query = $conection->prepare($delete);
    $query->execute(['id' => $_GET['id']]);

    header("Location: index.php?msg=Ação realizada com sucesso!&tipo=success");

} catch (PDOException $ex) {
    echo 'Erro ' . $ex->getTraceAsString();
}

?>


