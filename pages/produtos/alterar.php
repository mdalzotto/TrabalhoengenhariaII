<?php

try {
    require_once('../conexao.php');

    $produtos = array(
        'id' => $_GET['id'],
        'nome' => $nome = $_POST['nome'],
        'apelido' => $apelido = $_POST['apelido'],
        'ativo' => $ativo = $_POST['ativo'],
        'cod_barras' => $cod_barras = $_POST['cod_barras'],
        'valor' => $valor = $_POST['valor'],
        'qtd' => $qtd = $_POST['qtd'],
        'qtd_min' => $qtd_min = $_POST['qtd_min'],
        'icms' => $icms = $_POST['icms'],
        'cod' => $cod = $_POST['cod_personalizado'],
        'local_estoque' => $local = $_POST['local']);

    $update = 'UPDATE produtos SET nome = :nome , apelido_produto = :apelido , ativo = :ativo, cod_barras = :cod_barras, valor = :valor, qtd_estoque = :qtd, qtd_estoque_min = :qtd_min, icms_id= :icms , cod_personalizado= :cod , local= :local_estoque WHERE id = :id';
    $query = $conection->prepare($update);
//    var_dump($query);

    if ($query->execute($produtos)) {
        header("Location: index.php?msg=Registro alterado com sucesso!&tipo=success");
    } else {
        header("Location: index.php?msg=Erro ao Alterar $nome &tipo=danger");
    }

} catch (PDOException $ex) {
    echo 'Erro ' . $ex->getTraceAsString();
}
?>


