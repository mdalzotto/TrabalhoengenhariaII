<?php
    require_once('./classeConection.php');

    $conection = new classeConection();

    $rota = NULL;

    !isset($_GET['rota']) ? $rota = 'listar' : $rota = $_GET['rota'];

    if ($rota == 'login') {
        $dados = $_POST;
        $sql = "SELECT permissao FROM users WHERE upper( usuario )  = upper(:login)  and senha =  md5(:senha);";
        $result = $conection->getRegistro($sql, $dados);

        if ($result == true) {
            session_start();
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['permissao'] = $result['permissao'];

            header('location: baseController.php?rota=listar');

        } else {
            session_start();
            $_SESSION['msg'] = "Login ou senha incorreto!";
            $_SESSION['tipo'] = "danger";
            header("Location: ../index.php");
            exit();

//            header("Location: ../index.php?msg=Login ou senha incorreto!&tipo=danger");
//    Nome de usuário ou senha errados. Por favor tente outra vez.
        }

    }

    require_once('./sessionController.php');

    if ($rota == 'logout') {
        session_start();
        session_destroy();
        session_start();
        $_SESSION['msg'] = "Você foi desconectado com sucesso";
        $_SESSION['tipo'] = "success";
        header('location: ../index.php');
        exit();
    }

    if ($rota == 'listar') {
        $titulo = "Home";

        $consulta = "SELECT count(*) as qtd FROM cliente";
        $qtdCliente = $conection->getLista($consulta);

        $consulta = "SELECT count(*) as qtd  FROM produtos";
        $qtdProduto = $conection->getLista($consulta);

        $consulta = "SELECT count(*) as qtd  FROM users";
        $qtdUsuario = $conection->getLista($consulta);

        require_once('../View/base/base.php');
    }
?>
