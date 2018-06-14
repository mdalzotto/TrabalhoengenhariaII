<?php
    session_start();
    if (!isset($_SESSION['login'])) {
        session_start();
        $_SESSION['msg'] = "Faça login para acessar o sistema";
        $_SESSION['tipo'] = "danger";
        header("location: ../index.php");
        exit;
    }
?>
