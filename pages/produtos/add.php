<?php

try {
    require_once('../conexao.php');

    $produtos = array(
        'nome' => $nome = $_POST['nome'],
        'apelido' => $apelido = $_POST['apelido'],
        'ativo' => $ativo = $_POST['ativo'],
        'cod_barras' => $cod_barras = $_POST['cod_barras'],
        'valor' => $valor = $_POST['valor'],
        'qtd' => $qtd = $_POST['qtd'],
        'qtd_min' => $qtd_min = $_POST['qtd_min']);


    $sql = "INSERT INTO produtos (nome, apelido_produto, ativo, cod_barras, valor, qtd_estoque, qtd_estoque_min) VALUES ( :nome , :apelido ,:ativo ,  :cod_barras , :valor , :qtd , :qtd_min);";

    $query = $conection->prepare($sql);

    if ($query->execute($produtos)) {
        header("Location: index.php?msg=Cadastrado com sucesso!&tipo=success");
    } else {
        header("Location: adicionar.php?msg=Erro ao cadastrar&tipo=danger");
    }

} catch (PDOException $ex) {
    echo 'Erro ' . $ex->getTraceAsString();
}
?>


