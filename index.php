<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="View/img/icone.ico" type="image/x-icon"/>
    <link href="View/css/custom.css" rel="stylesheet">
    <title>Login - SisProd</title>

    <link href="View/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="View/css/signin.css" rel="stylesheet">

</head>

<body class="text-center fotoFundo">

<form class="form-signin" method="post" action="Controller/baseController.php?rota=login">
    <img class="mb-4" src="View/img/icone.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">SisProd login</h1>
    <label class="sr-only">Login</label>
    <input type="text" name="login" class="form-control" placeholder="Nome de usuário" required="" autofocus="">
    <label class="sr-only">Senha</label>
    <input type="password" name="senha" class="form-control" placeholder="Senha" required="">
    <div class="checkbox mb-3">
        <?php
            session_start();
            $msg = $_SESSION['msg'];
            $tipo = $_SESSION['tipo'];
            unset($_SESSION["msg"], $_SESSION["tipo"]);

            if (isset($msg)) {
                echo '<div class="alert alert-' . $tipo . ' alert-dismissible fade show mt-2" role="alert">
         ' . $msg . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
            }

        ?>

    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    <p class="mt-5 mb-3 text-muted">© <?php echo date('Y') ?></p>
</form>

<!-- Bootstrap core JavaScript-->
<script src="View/vendor/jquery/jquery.min.js"></script>
<script src="View/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="View/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>