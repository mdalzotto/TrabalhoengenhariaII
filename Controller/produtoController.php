<?php
    require_once('./classeConection.php');
    require_once('./sessionController.php');

    $rota = NULL;

    !isset($_GET['rota']) ? $rota = 'listar' : $rota = $_GET['rota'];

    $conection = new classeConection();

    if ($rota == 'listar') {
        $titulo = "Produtos";
        $consulta = "SELECT * FROM produtos WHERE ativo = '1' ";
        $dados = $conection->getLista($consulta);
        require_once('../View/base/produto/listaProduto.php');
    }

    if ($rota == 'inativos') {
        $titulo = "Produtos inativos";
        $consulta = "SELECT * FROM produtos WHERE ativo = '0'";
        $dados = $conection->getLista($consulta);
        require_once('../View/base/produto/listaProduto.php');
    }

    if ($rota == 'novo') {

        $consulta = "SELECT * FROM icms";
        $icm = $conection->getLista($consulta);

        $titulo = "Adicionar produto";
        $acaoForm = "produtoController.php?rota=cadastrar";
        require_once('../View/base/produto/campos_form.php');
    }

    if ($rota == 'cadastrar') {
        try {
            $dados = $_POST;

            $sql = "INSERT INTO produtos (ativo, nome, apelido_produto,  valor,  cod_barras,qtd_estoque, qtd_estoque_min, icms_id, cod_personalizado , local) 
                                  VALUES ( :ativo ,:nome , :apelido , :valor , :cod_barras,  :qtd , :qtd_min, :icms, :cod_personalizado, :local_estoque);";
            $result = $conection->executaQuery($sql, $dados);

            session_start();
            if ($result == true) {
                $_SESSION['msg'] = "Cadastrado com sucesso!";
                $_SESSION['tipo'] = "success";
                header('location: produtoController.php');
            }
        } catch (exception $e) {
            session_start();
            $_SESSION['msg'] = 'Erro ao cadastrar ' . $e->getMessage();
            $_SESSION['tipo'] = "danger";
            header('location: produtoController.php?rota=novo');
        }
        exit();
    }

    if ($rota == 'buscar') {
        $titulo = "Editar Produto";

        $consulta = "SELECT * FROM icms";
        $icm = $conection->getLista($consulta);

        $id = $_GET['id'];
        $sql = "SELECT * FROM produtos WHERE id = :id";
        $chave = array('id' => $id);
        $produto = $conection->getRegistro($sql, $chave);

        $acaoForm = "produtoController.php?rota=atualizar&id=" . $id;
        require_once('../View/base/produto/campos_form.php');
    }

    if ($rota == 'atualizar') {
        try {
            $dado = $_POST;

            $sql = "UPDATE produtos SET nome = :nome , apelido_produto = :apelido , ativo = :ativo, cod_barras = :cod_barras, valor = :valor, qtd_estoque = :qtd, qtd_estoque_min = :qtd_min, icms_id= :icms , cod_personalizado= :cod_personalizado , local= :local_estoque WHERE id = :id";

            $result = $conection->executaQuery($sql, $dado);
            session_start();
            if ($result == true) {
                $_SESSION['msg'] = "Registro alterado com sucesso!";
                $_SESSION['tipo'] = "success";
                header('location: produtoController.php');
            }
        } catch (exception $e) {
            session_start();
            $_SESSION['msg'] = 'Erro ao Alterar ' . $e->getMessage();
            $_SESSION['tipo'] = "danger";
            header('location: produtoController.php');
        }
        exit();
    }

    if ($rota == 'deletar') {
        try {
            $id = $_GET['id'];
            $sql = "DELETE FROM produtos WHERE id = :id";
            $dados = array('id' => $id);
            $result = $conection->executaQuery($sql, $dados);
            session_start();
            if ($result == true) {
                $_SESSION['msg'] = "Ação realizada com sucesso!";
                $_SESSION['tipo'] = "success";
                header('location: produtoController.php');
            }
        } catch (exception $e) {
            session_start();
            $_SESSION['msg'] = 'Erro ao deletar ' . $e->getMessage();
            $_SESSION['tipo'] = "danger";
            header('location: produtoController.php');
        }
        exit();
    }

    if ($rota == 'detalhes') {
        $titulo = "Detalhes";
        $id = $_GET['id'];

        $sql = "SELECT * FROM produtos JOIN icms icms ON produtos.icms_id = icms.id where produtos.id = :id";
        $chave = array('id' => $id);
        $produto = $conection->getRegistro($sql, $chave);
        require_once('../View/base/produto/campos_detalhes.php');
    }

?>
