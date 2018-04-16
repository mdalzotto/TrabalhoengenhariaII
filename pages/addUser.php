<?php

try {
    require_once('conexao.php');

    $usuario = $_POST['user'];
    $senha = $_POST['senha'];
    $confirmaSenha = $_POST['confirmaSenha'];
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $permissao = $_POST['permissao'];

    $usuario = array('usuario' => $usuario, 'senha' => $senha, 'email' => $email, 'nome' => $nome, 'sobrenome' => $sobrenome, 'permissao' => $permissao);

    $sql = "INSERT INTO users (usuario, senha, email, nome, sobrenome,permissao) VALUES ( :usuario , :senha , :email , :nome , :sobrenome,:permissao);";

    $query = $conection->prepare($sql);

    if ($query->execute($usuario)) {
        header("Location: ../index.php?msg=Registro salvo com sucesso!&tipo=success");
//        echo '<script>alert("Sucesso")</script>';
    } else {
        header("Location: ../index.php?msg=Erro ao cadastrar! Tente novamente!&tipo=danger");
//        echo '<script>alert("Erro ao cadastrar")</script>';
    }

} catch (PDOException $ex) {
    echo 'Erro ' . $ex->getTraceAsString();
}

?>

