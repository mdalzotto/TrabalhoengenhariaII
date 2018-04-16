<?php

try {
    require_once('../conexao.php');

    $usuarios = array(
        'id' => $_GET['id'],
        'usuario' => $usuario = $_POST['user'],
        'senha' =>  $senha = $_POST['senha'],
        'email' => $email = $_POST['email'],
        'nome' => $nome = $_POST['nome'],
        'sobrenome' => $sobrenome = $_POST['sobrenome'],
        'permissao' => $permissao = $_POST['permissao']);

//    $update = 'UPDATE produtos SET nome = :nome , apelido_produto = :apelido , ativo = :ativo, cod_barras = :cod_barras, valor = :valor, qtd_estoque = :qtd, qtd_estoque_min = :qtd_min, icms_id= :icms , cod_personalizado= :cod , local= :local_estoque WHERE id = :id';

//    var_dump($_GET);
//
//    $id = $_GET['id'];
//    $confirmaSenha = $_POST['confirmaSenha'];
//
//     = array('' => $usuario, '' => $senha, '' => $email, '' => $nome, '' => $sobrenome, '' => $permissao);

//    $sql = "INSERT INTO users (usuario, senha, email, nome, sobrenome,permissao) VALUES ( :usuario , :senha , :email , :nome , :sobrenome, :permissao);";
    $update = 'UPDATE users SET usuario = :usuario , senha = :senha , email = :email, nome = :nome, sobrenome = :sobrenome, permissao = :permissao WHERE id = :id';

    $query = $conection->prepare($update);

    if ($query->execute($usuarios)) {
        header("Location: index.php?msg=Registro alterado com sucesso!&tipo=success");
    } else {
        header("Location: index.php?msg=Erro ao Alterar $nome &tipo=danger");
    }

} catch (PDOException $ex) {
    echo 'Erro ' . $ex->getMessage();
}
?>


