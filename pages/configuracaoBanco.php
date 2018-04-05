<?php

$host = "localhost";
//$bdtipo = "mysql";
$bdtipo ='mysql';
$dbnome = "trabalhoWeb";

if($bdtipo == 'mysql'){
    $user = "root";
    $senha = "root";
} else if($bdtipo == 'pgsql'){
    $user = "postgres";
    $senha = "masterkey";
}

try {
    $conection = new PDO($bdtipo . ':host=' . $host . ';dbname=' . $dbnome, $user, $senha);
} catch (PDOException $ex) {
    echo $ex->getTraceAsString();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Start Bootstrap Template</title>
    <!-- Bootstrap core CSS-->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
<div class="container" style="margin-top: 12%">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Configuração de Banco de dados</div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label>Host</label>
                            <input class="form-control" name="nome" type="text" placeholder="Ex: localhost">
                        </div>
                        <div class="col-md-6">
                            <label>Tipo Banco</label>
                            <input class="form-control" name="sobrenome" type="text" placeholder="Ex: mysql">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Nome database</label>
                    <input class="form-control" name="email" type="email" placeholder="Ex: sisprod">
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label>Usuario</label>
                            <input class="form-control" name="senha" type="text" placeholder="Ex: root">
                        </div>
                        <div class="col-md-6">
                            <label>Senha</label>
                            <input class="form-control" name="confirmaSenha" type="password" placeholder="Ex: root">
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-block">Salvar</button>
            </form>
<!--            <div class="text-center">-->
<!--                <a class="d-block small mt-3" href="../index.php">Pagina de login</a>-->
                <!--          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>-->
<!--            </div>-->
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>

