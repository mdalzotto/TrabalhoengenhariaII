<?php

try {
    require_once('conexao.php');

    $usuario = $_POST['user'];
    $senha = $_POST['senha'];
    $confirmaSenha = $_POST['confirmaSenha'];
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];

    $usuario = array('usuario' => $usuario, 'senha' => $senha, 'email' => $email, 'nome' => $nome, 'sobrenome' => $sobrenome);

    $sql = "INSERT INTO users (usuario, senha, email, nome, sobrenome) VALUES ( :usuario , :senha , :email , :nome , :sobrenome);";

    $query = $conection->prepare($sql);

    if ($query->execute($usuario)) {
        echo '<script>alert("Sucesso")</script>';
    } else {
        echo '<script>alert("Erro ao cadastrar")</script>';
    }

} catch (PDOException $ex) {
    echo 'Erro ' . $ex->getTraceAsString();
}

?>

