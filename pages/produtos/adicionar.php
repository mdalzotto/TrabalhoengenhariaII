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
        'qtd_min' => $qtd_min = $_POST['qtd_min'],
        'icms' => $icms = $_POST['icms'],
        'cod' => $cod = $_POST['cod_personalizado'],
        'local_estoque' => $local = $_POST['local']);


    $sql = "INSERT INTO produtos (nome, apelido_produto, ativo, cod_barras, valor, qtd_estoque, qtd_estoque_min, icms_id, cod_personalizado , local) VALUES ( :nome , :apelido ,:ativo ,  :cod_barras , :valor , :qtd , :qtd_min, :icms, :cod, :local_estoque);";

    $query = $conection->prepare($sql);

    if ($query->execute($produtos)) {
        header("Location: index.php?msg=Cadastrado com sucesso!&tipo=success");
    } else {
        header("Location: cadastrar.php?msg=Erro ao cadastrar&tipo=danger");
    }

} catch (PDOException $ex) {
    echo 'Erro ' . $ex->getTraceAsString();
}
?>


