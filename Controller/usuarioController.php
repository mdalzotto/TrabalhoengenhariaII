<?php
    require_once('./classeConection.php');
    require_once('./sessionController.php');

    $rota = NULL;

    !isset($_GET['rota']) ? $rota = 'listar' : $rota = $_GET['rota'];

    $conection = new classeConection();

    if ($rota == 'listar') {
        $titulo = "Usuarios";
        $consulta = "SELECT * FROM users";
        $usuarios = $conection->getLista($consulta);
        require_once('../View/base/usuario/listaUsuario.php');
    }

    if ($rota == 'novo') {
        $titulo = "Adicionar Usuario";
        $acaoForm = "usuarioController.php?rota=cadastrar";
        require_once('../View/base/usuario/campos_form.php');
    }

    if ($rota == 'cadastrar') {
        try {
            $dados = $_POST;

            $sql = "INSERT INTO users (usuario, senha, email, nome, sobrenome,permissao) VALUES ( :usuario , md5(:senha) , :email , :nome , :sobrenome, :permissao);";
            $result = $conection->executaQuery($sql, $dados);
            session_start();
            if ($result == true) {
                $_SESSION['msg'] = "Cadastrado com sucesso!";
                $_SESSION['tipo'] = "success";
                header('location: usuarioController.php');
            }

        } catch (exception $e) {
            session_start();
            if (isset($e->errorInfo[1]) && $e->errorInfo[1] == '1062') {
                $_SESSION['msg'] = 'Erro ao cadastrar e-mail ja cadastrado!';
                $_SESSION['tipo'] = "danger";
                header('location: usuarioController.php?rota=novo');
            } else {
                $_SESSION['msg'] = 'Erro ao cadastrar ' . $e->getMessage();
                $_SESSION['tipo'] = "danger";
                header('location: usuarioController.php?rota=novo');
            }
        }
        exit();
    }

    if ($rota == 'buscar' || $rota == 'senha') {
        $id = $_GET['id'];

        if ($rota == 'senha') {
            $titulo = "Editar senha de usuário";
            $editSenha = true;
            $acaoForm = "usuarioController.php?rota=UpdateSenha&id=" . $id;
        } else {
            $titulo = "Editar usuário";
            $acaoForm = "usuarioController.php?rota=atualizar&id=" . $id;
        }

        $sql = "SELECT * FROM users WHERE id = :id";
        $chave = array('id' => $id);
        $usuario = $conection->getRegistro($sql, $chave);

        require_once('../View/base/usuario/campos_form.php');
    }

    if ($rota == 'atualizar') {
        try {

            $dados = $_POST;

            $sql = 'UPDATE users SET usuario = :usuario , email = :email, nome = :nome, sobrenome = :sobrenome, permissao = :permissao WHERE id = :id';
            $result = $conection->executaQuery($sql, $dados);
            session_start();
            if ($result == true) {
                $_SESSION['msg'] = "Registro alterado com sucesso!";
                $_SESSION['tipo'] = "success";
                header('location: usuarioController.php');
            }
        } catch (exception $e) {
            session_start();
            $_SESSION['msg'] = 'Erro ao Alterar ' . $e->getMessage();
            $_SESSION['tipo'] = "danger";
            header('location: usuarioController.php');
        }
        exit();
    }

    if ($rota == 'deletar') {
        try {
            $id = $_GET['id'];
            $sql = "DELETE FROM users WHERE id = :id";
            $dados = array('id' => $id);
            $result = $conection->executaQuery($sql, $dados);
            session_start();
            if ($result == true) {
                $_SESSION['msg'] = "Ação realizada com sucesso!";
                $_SESSION['tipo'] = "success";
                header('location: usuarioController.php');
            }
        } catch (exception $e) {
            session_start();
            $_SESSION['msg'] = 'Erro ao deletar ' . $e->getMessage();
            $_SESSION['tipo'] = "danger";
            header('location: usuarioController.php');
        }
        exit();
    }

    if ($rota == 'UpdateSenha') {
        try {

            $dados = $_POST;

            $sql = 'UPDATE users SET senha = md5(:senha) WHERE id = :id';
            $result = $conection->executaQuery($sql, $dados);
            session_start();
            if ($result == true) {
                $_SESSION['msg'] = "Senha alterada com sucesso!";
                $_SESSION['tipo'] = "success";
                header('location: usuarioController.php');
            }
        } catch (exception $e) {
            session_start();
            $_SESSION['msg'] = 'Erro ao alterar a senha ' . $e->getMessage();
            $_SESSION['tipo'] = "danger";
            header('location: usuarioController.php');
        }
        exit();
    }

?>
