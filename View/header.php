<?php define('APP_PATH', 'http://localhost/TrabalhoengenhariaII/View');
    $pagina = $_SERVER[REQUEST_URI]; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SisProd</title>
    <link rel="shortcut icon" href="<?= APP_PATH ?>/img/icone.ico" type="image/x-icon"/>
    <link href="<?= APP_PATH ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= APP_PATH ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?= APP_PATH ?>/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="<?= APP_PATH ?>/css/sb-admin.css" rel="stylesheet">
    <link href="<?= APP_PATH ?>/css/custom.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>

<style>
    /* Include Lato font from Google Web Fonts */
    @import url('https://fonts.googleapis.com/css?family=Lato:300,400,400italic,500,500italic,600,600italic,700,700italic');
</style>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="
    background-image: linear-gradient(to right, rgba(0,123,255,.5), rgba(0,123,255,.5));
" id="mainNav">
    <a class="navbar-brand" href="../Controller/baseController.php"><b>SisProd</b></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

            <li class="nav-item <?php if (strpos($pagina, 'baseController')) echo 'active' ?> " data-toggle="tooltip" data-placement="right" title="Inicio">
                <a class="nav-link" href="../Controller/baseController.php">
                    <i class="fa fa-fw fa-home"></i>
                    <span class="nav-link-text">Inicio</span>
                </a>
            </li>

            <li class="nav-item <?php if (strpos($pagina, 'produtoController')) echo 'active' ?>" data-toggle="tooltip" data-placement="right" title="Produtos">
                <a class="nav-link" href="../Controller/produtoController.php">
                    <i class="fa fa-fw fa-cubes"></i>
                    <span class="nav-link-text active">Produtos</span>
                </a>
            </li>

            <li class="nav-item <?php if (strpos($pagina, 'clienteController')) echo 'active' ?>" data-toggle="tooltip" data-placement="right" title="Clientes">
                <a class="nav-link" href="../Controller/clienteController.php">
                    <i class="fa fa-fw fa-user"></i>
                    <span class="nav-link-text">Clientes</span>
                </a>
            </li>

            <li class="nav-item <?php if (strpos($pagina, 'usuarioController')) echo 'active' ?>" data-toggle="tooltip" data-placement="right" title="Usuários">
                <a class="nav-link" href="../Controller/usuarioController.php">
                    <i class="fa fa-fw fa-user"></i>
                    <span class="nav-link-text">Usuários</span>
                </a>
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
        <h1 class="navbar-brand" style="margin-top: 5px;"><?php echo $titulo; ?> </h1>
    </div>

    <?php
        $msg = $_SESSION['msg'];
        $tipo = $_SESSION['tipo'];
        unset($_SESSION["msg"], $_SESSION["tipo"]);
        if (isset($msg)) {
            echo '<div class="alert alert-' . $tipo . ' alert-dismissible fade show m-2" role="alert">
         ' . $msg . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
        }?>

    <div class="container-fluid">