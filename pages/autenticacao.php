<?php

require_once('conexao.php');

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM users WHERE usuario = '$login' and senha =  '$senha';";
$result = $conection->query($sql);

if ($result->fetch() == true) {
    session_start();
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['senha'] = $_POST['senha'];

    header("location: main.php");

} else {
    header("Location: ../index.php?msg=Login ou senha incorreto!&tipo=danger");
//    Nome de usuário ou senha errados. Por favor tente outra vez.
}

?>