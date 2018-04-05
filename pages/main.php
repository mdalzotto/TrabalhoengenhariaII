<?php
require_once('conexao.php');

session_start();
if (!isset($_SESSION['login']) || !isset($_SESSION['senha'])) {
    header("location: ../index.php ");
    exit;
}
//else {
//    continue ;
//}


?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SisProd</title>
    <link rel="shortcut icon" href="../img/icone.ico" type="image/x-icon" />
    <!-- Bootstrap core CSS-->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="
    background-image: linear-gradient(to right, rgba(0,123,255,.5), rgba(0,123,255,.5));
" id="mainNav">
    <a class="navbar-brand" href="main.php"><b>SisProd</b></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

            <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Inicio">
                <a class="nav-link" href="main.php">
                    <i class="fa fa-fw fa-home"></i>
                    <span class="nav-link-text">Inicio</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Produtos">
                <a class="nav-link" href="produtos/index.php">
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

<!--            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Adiministrador ">-->
<!--                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti"-->
<!--                   data-parent="#exampleAccordion">-->
<!--                    <i class="fa fa-fw fa-users"></i>-->
<!--                    <span class="nav-link-text">Adiministrador</span>-->
<!--                </a>-->
<!--                <ul class="sidenav-second-level collapse" id="collapseMulti">-->
<!--                    <li>-->
<!--                        <a href="register.html"><i class="fa fa-fw fa-user-plus"></i> Cadastrar</a>-->
<!--                    </li>-->
<!---->
<!--                    <li>-->
<!--                        <a href="#"><i class="fa fa-fw fa-user-circle"></i> Usuarios</a>-->
<!--                    </li>-->
<!--                    <!--<li>-->-->
<!--                    <!--<a href="#">Second Level Item</a>-->-->
<!--                    <!--</li>-->-->
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
<!--                </ul>-->
<!--            </li>-->

        </ul>

        <!-- -&#45;&#45;&#45;&#45;-->

        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <!--<li class="nav-item dropdown">-->
            <!--<div class="dropdown-menu" aria-labelledby="messagesDropdown">-->
            <!--<h6 class="dropdown-header">New Messages:</h6>-->
            <!--<div class="dropdown-divider"></div>-->
            <!--<a class="dropdown-item" href="#">-->
            <!--<strong>David Miller</strong>-->
            <!--<span class="small float-right text-muted">11:21 AM</span>-->
            <!--<div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>-->
            <!--</a>-->
            <!--<div class="dropdown-divider"></div>-->
            <!--<a class="dropdown-item" href="#">-->
            <!--<strong>Jane Smith</strong>-->
            <!--<span class="small float-right text-muted">11:21 AM</span>-->
            <!--<div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>-->
            <!--</a>-->
            <!--<div class="dropdown-divider"></div>-->
            <!--<a class="dropdown-item" href="#">-->
            <!--<strong>John Doe</strong>-->
            <!--<span class="small float-right text-muted">11:21 AM</span>-->
            <!--<div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>-->
            <!--</a>-->
            <!--<div class="dropdown-divider"></div>-->
            <!--<a class="dropdown-item small" href="#">View all messages</a>-->
            <!--</div>-->
            <!--</li>-->
            <!--<li class="nav-item dropdown">-->
            <!--<div class="dropdown-menu" aria-labelledby="alertsDropdown">-->
            <!--<h6 class="dropdown-header">New Alerts:</h6>-->
            <!--<div class="dropdown-divider"></div>-->
            <!--<a class="dropdown-item" href="#">-->
            <!--<span class="text-success">-->
            <!--<strong>-->
            <!--<i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>-->
            <!--</span>-->
            <!--<span class="small float-right text-muted">11:21 AM</span>-->
            <!--<div class="dropdown-message small">This is an automated server response message. All systems are online.</div>-->
            <!--</a>-->
            <!--<div class="dropdown-divider"></div>-->
            <!--<a class="dropdown-item" href="#">-->
            <!--<span class="text-danger">-->
            <!--<strong>-->
            <!--<i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>-->
            <!--</span>-->
            <!--<span class="small float-right text-muted">11:21 AM</span>-->
            <!--<div class="dropdown-message small">This is an automated server response message. All systems are online.</div>-->
            <!--</a>-->
            <!--<div class="dropdown-divider"></div>-->
            <!--<a class="dropdown-item" href="#">-->
            <!--<span class="text-success">-->
            <!--<strong>-->
            <!--<i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>-->
            <!--</span>-->
            <!--<span class="small float-right text-muted">11:21 AM</span>-->
            <!--<div class="dropdown-message small">This is an automated server response message. All systems are online.</div>-->
            <!--</a>-->
            <!--<div class="dropdown-divider"></div>-->
            <!--<a class="dropdown-item small" href="#">View all alerts</a>-->
            <!--</div>-->
            <!--</li>-->

            <!--<li class="nav-item">-->
            <!--<form class="form-inline my-2 my-lg-0 mr-lg-2">-->
            <!--<div class="input-group">-->
            <!--<input class="form-control" type="text" placeholder="Search for...">-->
            <!--<span class="input-group-append">-->
            <!--<button class="btn btn-primary" type="button">-->
            <!--<i class="fa fa-search"></i>-->
            <!--</button>-->
            <!--</span>-->
            <!--</div>-->
            <!--</form>-->
            <!--</li>-->
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#logout">
                    <i class="fa fa-fw fa-sign-out"></i>Sair</a>
            </li>
        </ul>

        <!-- -&#45;&#45;&#45;&#45;-->

    </div>
</nav>
<div class="content-wrapper" style="background:#f8f9fa">
    <div class="navbar navbar-light bg-light titulo-pagina">
        <h1 class="navbar-brand" style="margin-top: 5px;">Home</h1>
    </div>

    <?php
    $msg = $_GET["msg"];
    $tipo = $_GET["tipo"];
    if (isset($msg)) {
        echo '<div class="alert alert-'.$tipo.' alert-dismissible fade show m-2" role="alert">
        Erro ' . $msg . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    }
    ?>
    <!--conteudo------------------------------->

    <div class="container-fluid">
        <!-- Breadcrumbs-->

        <!-- Icon Cards-->
        <div class="row mt-3">
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-success o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-shopping-cart"></i>
                        </div>
                        <div class="mr-5">Produtos</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="produtos/index.php">
                        <span class="float-left">Veja mais</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>

            <!--            <div class="col-xl-3 col-sm-6 mb-3">-->
            <!--                <div class="card text-white bg-primary o-hidden h-100">-->
            <!--                    <div class="card-body">-->
            <!--                        <div class="card-body-icon">-->
            <!--                            <i class="fa fa-fw fa-comments"></i>-->
            <!--                        </div>-->
            <!--                        <div class="mr-5">26 New Messages!</div>-->
            <!--                    </div>-->
            <!--                    <a class="card-footer text-white clearfix small z-1" href="#">-->
            <!--                        <span class="float-left">View Details</span>-->
            <!--                        <span class="float-right">-->
            <!--                <i class="fa fa-angle-right"></i>-->
            <!--              </span>-->
            <!--                    </a>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="col-xl-3 col-sm-6 mb-3">-->
            <!--                <div class="card text-white bg-warning o-hidden h-100">-->
            <!--                    <div class="card-body">-->
            <!--                        <div class="card-body-icon">-->
            <!--                            <i class="fa fa-fw fa-list"></i>-->
            <!--                        </div>-->
            <!--                        <div class="mr-5">11 New Tasks!</div>-->
            <!--                    </div>-->
            <!--                    <a class="card-footer text-white clearfix small z-1" href="#">-->
            <!--                        <span class="float-left">View Details</span>-->
            <!--                        <span class="float-right">-->
            <!--                <i class="fa fa-angle-right"></i>-->
            <!--              </span>-->
            <!--                    </a>-->
            <!--                </div>-->
            <!--            </div>-->
            <!---->
            <!--            <div class="col-xl-3 col-sm-6 mb-3">-->
            <!--                <div class="card text-white bg-danger o-hidden h-100">-->
            <!--                    <div class="card-body">-->
            <!--                        <div class="card-body-icon">-->
            <!--                            <i class="fa fa-fw fa-support"></i>-->
            <!--                        </div>-->
            <!--                        <div class="mr-5">13 New Tickets!</div>-->
            <!--                    </div>-->
            <!--                    <a class="card-footer text-white clearfix small z-1" href="#">-->
            <!--                        <span class="float-left">View Details</span>-->
            <!--                        <span class="float-right">-->
            <!--                <i class="fa fa-angle-right"></i>-->
            <!--              </span>-->
            <!--                    </a>-->
            <!--                </div>-->
            <!--            </div>-->
        </div>
    </div>

    <!--fimconteudo------------------------------->

    <div>
        <div class="col-sm-12">
            <p id="ret"></p>
        </div>
    </div>

</div>
<!-- /.container-fluid-->
<!-- /.content-wrapper-->
<footer class="sticky-footer">
    <div class="container">
        <div class="text-center">
            <small>Copyright © Your Website 2018</small>
        </div>
    </div>
</footer>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
</a>

<!-- Logout Modal-->
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
                <a class="btn btn-success" href="sair.php">Sair</a>
                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!--fim modal saida-->


<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Page level plugin JavaScript-->
<!--<script src="vendor/chart.js/Chart.min.js"></script>-->
<script src="../vendor/datatables/jquery.dataTables.js"></script>
<script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Custom scripts for all pages-->
<script src="../js/sb-admin.min.js"></script>
<!-- Custom scripts for this page-->
<script src="../js/sb-admin-datatables.min.js"></script>
<!--<script src="js/sb-admin-charts.min.js"></script>-->
</div>
</body>

</html>
