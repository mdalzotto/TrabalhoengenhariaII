<?php
    require_once('./classeConection.php');
    require_once('./sessionController.php');

    $rota = NULL;

    !isset($_GET['rota']) ? $rota = 'listar' : $rota = $_GET['rota'];

    $conection = new classeConection();

    if ($rota == 'listar') {
        $titulo = "Clientes";
        $consulta = "SELECT * FROM cliente WHERE ativo = '1'";
        $dados = $conection->getLista($consulta);
        require_once('../View/base/cliente/listaCliente.php');
    }

    if ($rota == 'inativos') {
        $titulo = "Clientes inativos";
        $consulta = "SELECT * FROM cliente WHERE ativo = '0'";
        $dados = $conection->getLista($consulta);
        require_once('../View/base/cliente/listaCliente.php');
    }

    if ($rota == 'novo') {

        $consulta = "SELECT cidade.id ,cidade.nome as nome , estado.nome as estado, estado.uf as uf , pais.nome as pais ,pais.abreviacao FROM cidade JOIN estado estado ON cidade.estado_id = estado.id JOIN pais pais ON estado.pais_id = pais.id;";
        $cidades = $conection->getLista($consulta);

        $titulo = "Adicionar Cliente";
        $acaoForm = "clienteController.php?rota=cadastrar";
        require_once('../View/base/cliente/campos_form.php');
    }

    if ($rota == 'cadastrar') {
        try {
            $dados = $_POST;

            $sql = "INSERT INTO cliente (ativo, tipo, nome, cpf, rg, data_nascimento, cnpj, razao_social, fantasia, ie, telefone, email, cep, endereco, numero, bairro, complemento, cidade_id) 
                         VALUES (:ativo, :tipo, :nome, :cpf, :rg, :data_nascimento, :cnpj, :razao_social, :fantasia, :ie, :telefone, :email, :cep, :endereco, :numero, :bairro, :complemento, :cidade);";
            $result = $conection->executaQuery($sql, $dados);
            session_start();
            if ($result == true) {
                $_SESSION['msg'] = "Cadastrado com sucesso!";
                $_SESSION['tipo'] = "success";
                header('location: clienteController.php');
            }
        } catch (exception $e) {
            throw $e;

            session_start();
            $_SESSION['msg'] = 'Erro ao cadastrar ' . $e->getMessage();
            $_SESSION['tipo'] = "danger";
            header('location: clienteController.php?rota=novo');
        }
        exit();
    }

    if ($rota == 'buscar') {
        $titulo = "Editar Cliente";

        $consulta = "SELECT cidade.id ,cidade.nome as nome , estado.nome as estado, estado.uf as uf , pais.nome as pais ,pais.abreviacao FROM cidade JOIN estado estado ON cidade.estado_id = estado.id JOIN pais pais ON estado.pais_id = pais.id;";
//        $consulta = "SELECT * FROM cidade";
        $cidades = $conection->getLista($consulta);

        $id = $_GET['id'];
        $sql = "SELECT * FROM cliente WHERE id = :id";
        $chave = array('id' => $id);
        $cliente = $conection->getRegistro($sql, $chave);

        $acaoForm = "clienteController.php?rota=atualizar&id=" . $id;
        require_once('../View/base/cliente/campos_form.php');
    }

    if ($rota == 'atualizar') {
        try {
            $dados = $_POST;

            $sql = "update cliente set ativo = :ativo , tipo = :tipo, nome = :nome, cpf = :cpf, rg =:rg, data_nascimento =:data_nascimento, cnpj =:cnpj, razao_social =:razao_social , fantasia = :fantasia, ie =:ie, telefone =:telefone, email =  :email, cep =:cep, endereco =:endereco , numero =:numero, bairro =:bairro, complemento =:complemento, cidade_id = :cidade WHERE id = :id";
            $result = $conection->executaQuery($sql, $dados);
            session_start();
            if ($result == true) {
                $_SESSION['msg'] = "Registro alterado com sucesso!";
                $_SESSION['tipo'] = "success";
                header('location: clienteController.php');
            }
        } catch (exception $e) {
            throw $e;
            session_start();
            $_SESSION['msg'] = 'Erro ao Alterar ' . $e->getMessage();
            $_SESSION['tipo'] = "danger";
            header('location: clienteController.php');
        }
        exit();
    }

    if ($rota == 'deletar') {
        try {
            $id = $_GET['id'];
            $sql = "DELETE FROM cliente WHERE id = :id";
            $dados = array('id' => $id);
            $result = $conection->executaQuery($sql, $dados);
            session_start();
            if ($result == true) {
                $_SESSION['msg'] = "Ação realizada com sucesso!";
                $_SESSION['tipo'] = "success";
                header('location: clienteController.php');
            }
        } catch (exception $e) {
            session_start();
            $_SESSION['msg'] = 'Erro ao deletar ' . $e->getMessage();
            $_SESSION['tipo'] = "danger";
            header('location: clienteController.php');
        }
        exit();
    }

    if ($rota == 'detalhes') {
        $titulo = "Detalhes";
        $id = $_GET['id'];

        $sql = "SELECT cliente.* ,cidade.nome as cidade ,estado.nome as estado, pais.nome as pais FROM cliente JOIN cidade on cidade_id = cidade.id JOIN estado estado ON cidade.estado_id = estado.id JOIN pais pais ON estado.pais_id = pais.id where cliente.id = :id";
        $chave = array('id' => $id);
        $cliente = $conection->getRegistro($sql, $chave);
        require_once('../View/base/cliente/campos_detalhes.php');
    }

?>
