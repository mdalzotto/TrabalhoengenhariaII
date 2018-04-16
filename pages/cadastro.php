<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cadastro de usuario - SisProd</title>
    <link rel="shortcut icon" href="../img/icone.ico" type="image/x-icon" />
    <!-- Bootstrap core CSS-->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
</head>

<script>
    function validasenha() {

        if ((document.getElementById('senha').value) == (document.getElementById('confirmaSenha').value)) {
            return true;
        }
        else {
            document.getElementById("senha").value = "";
            document.getElementById("confirmaSenha").value = "";
            document.getElementById("return").innerHTML = "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">\n" +
                "    As senhas devem ser iguais <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>\n" +
                "</div>\n";
            return false;
        }
    }
</script>

<body class="fotoFundo">
<div class="container" style="margin-top: 12%">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Cadastrar usuario</div>
        <div class="card-body">
            <form id="cadastro" method="post" action="addUser.php" onsubmit="return validasenha()">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label>Nome</label>
                            <input class="form-control" name="nome" type="text" placeholder="Nome" required>
                        </div>
                        <div class="col-md-6">
                            <label>Sobrenome</label>
                            <input class="form-control" name="sobrenome" type="text" placeholder="Sobrenome" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" name="email" type="email" placeholder="Email@host.com" required>
                </div>

                <div class="form-group">
                    <label>Usuario</label>
                    <input class="form-control" name="user" type="text" placeholder="Username" required>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label>Senha</label>
                            <input class="form-control" name="senha" id="senha" type="password" placeholder="123"
                                   required>
                        </div>
                        <div class="col-md-6">
                            <label>Confirme sua senha</label>
                            <input class="form-control" name="confirmaSenha" id="confirmaSenha" type="password"
                                   placeholder="123" required>
                        </div>
                        <input  type="hidden" class="form-control" id="permissao" name="permissao" value="Master" autocomplete="off" required>

                    </div>
                </div>
                <div id="return"></div>


                <button class="btn btn-primary btn-block" type="submit" value="submit">Cadastrar</button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="../index.php">Voltar para pagina de login</a>
                <!--          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>-->
            </div>
        </div>
    </div>
</div>
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
