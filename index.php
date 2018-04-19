<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="img/icone.ico" type="image/x-icon" />
    <link href="css/custom.css" rel="stylesheet">
    <title>Login - SisProd</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
</head>

<body class="text-center fotoFundo">
<form class="form-signin"  method="post" action="pages/autenticacao.php">
    <img class="mb-4" src="img/icone.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">SisProd login</h1>
    <label class="sr-only">Login</label>
    <input type="email" id="" name="login" class="form-control" placeholder="Login" required="" autofocus="">
    <label class="sr-only">Senha</label>
    <input type="password" id="" name="senha" class="form-control" placeholder="Senha" required="">
    <div class="checkbox mb-3">
        <?php
        $msg = $_GET["msg"];
        $tipo = $_GET["tipo"];
        if (isset($msg)) {
            echo '<div class="alert alert-' . $tipo . ' alert-dismissible fade show mt-2" role="alert">
         ' . $msg . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
        }


        require_once('pages/conexao.php');

        $sql = "SELECT * FROM users ";
        $result = $conection->query($sql);

        if ($result->fetch() == false) {
            echo " <div class=\"text-center\">
          <a class=\"d-block small mt-3\" href=\"pages/cadastro.php\">Cadastrar usuario</a>
          </div>";
        }

        ?>
        <!--        <label>-->
        <!--            <input type="checkbox" value="remember-me"> Remember me-->
        <!--        </label>-->
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
</form>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>