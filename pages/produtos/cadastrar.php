<?php
require_once('../conexao.php');

session_start();
if (!isset($_SESSION['login']) || !isset($_SESSION['senha'])) {
    header("location: ../../index.php?msg=Faça login para acessar o sistema!&tipo=danger ");
    exit;
}

$icms = 'SELECT * FROM icms';
$query = $conection->prepare($icms);
$query->execute();
$icm = $query->fetchAll();

$busca = 'select * FROM produtos where id= :id';

$query = $conection->prepare($busca);
$query->execute(['id' => $_GET['id']]);
$produto = $query->fetch();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SisProd</title>
    <link rel="shortcut icon" href="../../img/icone.ico" type="image/x-icon"/>
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../../css/sb-admin.css" rel="stylesheet">
    <link href="../../css/custom.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="
    background-image: linear-gradient(to right, rgba(0,123,255,.5), rgba(0,123,255,.5));
" id="mainNav">
    <a class="navbar-brand" href="../main.php"><b>SisProd</b></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Inicio">
                <a class="nav-link" href="../main.php">
                    <i class="fa fa-fw fa-home"></i>
                    <span class="nav-link-text">Inicio</span>
                </a>
            </li>

            <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Produtos">
                <a class="nav-link" href="index.php">
                    <i class="fa fa-fw fa-cubes"></i>
                    <span class="nav-link-text active">Produtos</span>
                </a>
            </li>

            <!--            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Clientes">-->
            <!--                <a class="nav-link" href="#">-->
            <!--                    <i class="fa fa-fw fa-user"></i>-->
            <!--                    <span class="nav-link-text">Clientes</span>-->
            <!--                </a>-->
            <!--            </li>-->
            <!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">-->
            <!--<a class="nav-link" href="tables.html">-->
            <!--<i class="fa fa-fw fa-table"></i>-->
            <!--<span class="nav-link-text">Tables</span>-->
            <!--</a>-->
            <!--</li>-->
            <!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">-->
            <!--<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">-->
            <!--<i class="fa fa-fw fa-wrench"></i>-->
            <!--<span class="nav-link-text">Clientes</span>-->
            <!--</a>-->
            <!--<ul class="sidenav-second-level collapse" id="collapseComponents">-->
            <!--<li>-->
            <!--<a href="#">Cadastro</a>-->
            <!--</li>-->
            <!--</ul>-->
            <!--</li>-->
            <!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">-->
            <!--<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">-->
            <!--<i class="fa fa-fw fa-users"></i>-->
            <!--<span class="nav-link-text">aaa</span>-->
            <!--</a>-->
            <!--<ul class="sidenav-second-level collapse" id="collapseExamplePages">-->
            <!--<li>-->
            <!--<a href="register.html"><i class="fa fa-fw fa-user-plus"></i> Cadastrar</a>-->
            <!--</li>-->

            <!--<li>-->
            <!--<a href="#"><i class="fa fa-fw fa-user-circle"></i> Usuarios</a>-->
            <!--</li>-->
            <!--</ul>-->
            <!--</li>-->

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Adiministrador ">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti"
                   data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-users"></i>
                    <span class="nav-link-text">Adiministrador</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseMulti">
                    <!--                    <li>-->
                    <!--                        <a href="register.html"><i class="fa fa-fw fa-user-plus"></i> Cadastrar</a>-->
                    <!--                    </li>-->

                    <li>
                        <a href="#"><i class="fa fa-fw fa-user-circle"></i> Usuarios</a>
                    </li>
                    <!--<li>-->
                    <!--<a href="#">Second Level Item</a>-->
                    <!--</li>-->
                    <!--                    <li>-->
                    <!--                        <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2"> <i-->
                    <!--                                    class="fa fa-fw fa-archive"></i> Base de dados</a>-->
                    <!--                        <ul class="sidenav-third-level collapse" id="collapseMulti2">-->
                    <!--                            <li>-->
                    <!--                                <a href="#"><i class="fa fa-fw fa-map"></i> Paises</a>-->
                    <!--                            </li>-->
                    <!--                            <li>-->
                    <!--                                <a href="#"><i class="fa fa-fw fa-map-marker"></i> Cidades</a>-->
                    <!--                            </li>-->
                    <!--                            <li>-->
                    <!--                                <a href="#"><i class="fa fa-fw fa-map-signs"></i> Estados</a>-->
                    <!--                            </li>-->
                    <!--                        </ul>-->
                    <!--                    </li>-->
                </ul>
            </li>

        </ul>

        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#logout">
                    <i class="fa fa-fw fa-sign-out"></i>Sair</a>
            </li>
        </ul>

    </div>
</nav>
<div class="content-wrapper" style="background:#f8f9fa">
    <div class="navbar navbar-light bg-light titulo-pagina">
        <?php echo '<h1 class="navbar-brand" style="margin-top: 5px;">' . (isset($produto['id']) ? "Editar produto" : "Adicionar produto") . '</h1>'; ?>
    </div>

    <?php
    $msg = $_GET["msg"];
    $tipo = $_GET["tipo"];
    if (isset($msg)) {
        echo '<div class="alert alert-' . $tipo . ' alert-dismissible fade show m-2" role="alert">
         ' . $msg . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    }
    ?>
    <!--conteudo------------------------------->

    <div class="container-fluid mt-3">
        <div class="col-sm-12">

            <?php echo '<form method="post" action="' . (isset($produto['id']) ? ("alterar.php?id=" . $produto['id']) : "adicionar.php") . '">'; ?>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label>Ativo</label>
                    <select type="text" class="form-control" id="ativo" name="ativo" required>
                        <?php echo '<option value="1" ' . (isset($produto['ativo']) ? ($produto['ativo'] == 1 ? 'selected' : '') : '') . ' >Sim</option>
                                    <option value="0" ' . (isset($produto['ativo']) ? ($produto['ativo'] == 0 ? 'selected' : '') : '') . ' >Não</option>
                        </select> '; ?>
                </div>

                <div class="form-group col-md-6">
                    <label>Nome</label>
                    <?php echo '<input value="' . (isset($produto['nome']) ? $produto['nome'] : "") . '" type="text" class="form-control" id="nome" name="nome" placeholder="" autocomplete="off" required>'; ?>
                </div>
                <div class="form-group col-md-4">
                    <label>Apelido</label>
                    <?php echo '<input value="' . (isset($produto['apelido_produto']) ? $produto['apelido_produto'] : "") . '"id="apelido" name="apelido" class="form-control" placeholder="" autocomplete="off" required>'; ?>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Valor</label>
                    <?php echo '<input value="' . (isset($produto['valor']) ? $produto['valor'] : "") . '" type="text" class="form-control" id="valor" name="valor" placeholder="1,99" autocomplete="off" required>'; ?>
                </div>
                <div class="form-group col-md-6">
                    <label>Codigo de barras</label>
                    <?php echo '<input value="' . (isset($produto['cod_barras']) ? $produto['cod_barras'] : "") . '" type="text" class="form-control" id="cod_barras" name="cod_barras" placeholder="789654654654" autocomplete="off">'; ?>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Quantidade</label>
                    <?php echo '<input value="' . (isset($produto['qtd_estoque']) ? $produto['qtd_estoque'] : "") . '" type="text" class="form-control" id="qtd" name="qtd" placeholder="99" autocomplete="off" required>'; ?>
                </div>
                <div class="form-group col-md-6">
                    <label>Quantidade minima</label>
                    <?php echo ' <input value="' . (isset($produto['qtd_estoque_min']) ? $produto['qtd_estoque_min'] : "") . '" type="text" class="form-control" id="qtd_min" name="qtd_min" placeholder="0" autocomplete="off"required>'; ?>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Icms Origem</label>
                    <select type="text" class="form-control" id="icms" name="icms" required>
                        <?php foreach ($icm as $icmes) {
                            echo ' <option value="' . $icmes['id_icms_origem'] . '" ' . (isset($produto['icms_id']) ? ($produto['icms_id'] == $icmes['id_icms_origem'] ? 'selected' : '') : '') . '> ' . $icmes['codigo_icms_origem'] . " - " . $icmes['desc_icms_origem'] . ' </option>';
                        } ?>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label>Código personalizado</label>
                    <?php echo '<input value="' . (isset($produto['cod_personalizado']) ? $produto['cod_personalizado'] : "") . '" type="text" class="form-control" id="cod_personalizado" name="cod_personalizado" placeholder="123" autocomplete="off" required>'; ?>
                </div>
                <div class="form-group col-md-3">
                    <label>Local no estoque</label>
                    <?php echo '<input value="' . (isset($produto['local']) ? $produto['local'] : "") . '"id="local" name="local" class="form-control" placeholder="Pratileira 01" autocomplete="off" required>'; ?>
                </div>
            </div>

            <?php echo ' <button type="submit" class="btn btn-success">' . (isset($produto['id']) ? "Salvar" : "Adicionar") . '</button>'; ?>
            <a class="btn btn-danger text-light" href="index.php">Cancelar</a>
            </form>

        </div>
    </div>


    <!--fimconteudo------------------------------->

    <div>
        <div class="col-sm-12">
            <p id="ret"></p>
        </div>
    </div>

</div>

<footer class="sticky-footer">
    <div class="container">
        <div class="text-center">
            <small>Copyright © Your Website 2018</small>
        </div>
    </div>
</footer>

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>

</a>

<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Você tem certeza que deseja sair?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Selecione "Sair" se você tiver certeza que deseja sair, para terminar sua sessão
                atual, caso contrario clique em cancelar.
            </div>
            <div class="modal-footer">
                <a class="btn btn-success" href="../sair.php">Sair</a>
                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<script src="../../vendor/jquery/jquery.min.js"></script>
<script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="../../vendor/datatables/jquery.dataTables.js"></script>
<script src="../../vendor/datatables/dataTables.bootstrap4.js"></script>
<script src="../../js/sb-admin.min.js"></script>
<script src="../../js/sb-admin-datatables.min.js"></script>
</div>
</body>

</html>
