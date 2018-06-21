$(document).ready(function () {

    inicia();

    $("#tipoPessoa").change(function () {
        inicia();
    });


    $("#cpf").mask("999.999.999-99");
    $("#rg").mask("999999999");

    $("#cnpj").mask("99.999.999/9999-99");

    $("#cep").mask("99999-999");
    $("#telefone").mask("(99) 9999-99999");

    $('#uf').mask('AA');
    $('#valor').mask('#.##0,00', {reverse: true});


});

function inicia() {

    var selecionado = $("#tipoPessoa").val();

    if (selecionado == 1) {

        $('.tipoJuridico input').val('').attr("readonly", true);
        $('#ie input').val('').attr("readonly", true);
        $('.tipoJuridico input').val('').attr("readonly", true);
        $('.tipoFisico input').attr("readonly", false);
        $('.isento_ie').addClass('not-show');
    }
    else if (selecionado == 0) {
        $('.tipoFisico input').val('').attr("readonly", true);
        $('.tipoJuridico input').attr("readonly", false);
        $('.isento_ie').removeClass('not-show');
    }

}