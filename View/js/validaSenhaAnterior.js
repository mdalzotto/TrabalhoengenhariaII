function validasenhaAnterior() {

    var senhaAnterior = document.getElementById('senhaAnterior').value;
    var senhaAtual = document.getElementById('senhaAtual').value;

    if(senhaAnterior.length <=0){
        document.getElementById("return").innerHTML = "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">\n" +
            "A senha anterior deve ser informada!  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>\n" +
            "</div>\n";
        return false;
    }

    if ((senhaAnterior) == (senhaAtual)) {
        return true;
    }
    else {
        document.getElementById("senhaAnterior").value = "";
        // document.getElementById("confirmaSenha").value = "";
        document.getElementById("return").innerHTML = "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">\n" +
            "A senha anterior deve ser indetinca a senha de usuário atual!  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>\n" +
            "</div>\n";
        return false;
    }
}
