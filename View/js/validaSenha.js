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
