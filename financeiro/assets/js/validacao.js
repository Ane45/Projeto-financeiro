function ValidarMeusDados() {

    let nome = document.getElementById("nome").value;
    let email = $("#email").val();
    let validado = true;
    let campos = "";

    if (nome.trim() == "") {
        campos = campos + "Preencher o campo Nome\n";
        $("#nome").focus();
        $("#divnome").addClass("has-error");
        validado = false;
    } else {
        $("#divnome").removeClass("has-error").addClass("has-success");


    }

    if (email.trim() == "") {
        campos = campos + "Preencher o campo E-mail\n";
        $("#email").focus();
        $("#divemail").addClass("has-error");
        validado = false;
    } else {
        $("#divemail").removeClass("has-error").addClass("has-success");

    }

    if (!validado)
        alert(campos);

    return validado;
}

function ValidarCategoria() {

    let validado = true;
    let campos = "";

    if ($("#nomecategoria").val().trim() == "") {
        campos = "Preencher o campo Nome da categoria\n";
        $("#nomecategoria").focus();
        $("#divcategoria").addClass("has-error");
        validado = false;
    } else {
        $("#divcategoria").removeClass("has-error").addClass("has-success");


    }

    if (!validado)
        alert(campos);

    return validado;
}

function ValidarEmpresa() {

    let validado = true;
    let campos = "";

    if ($("#nomeempresa").val().trim() == "") {
        campos = "Preencher o campo Nome da empresa\n";
        $("#nomeempresa").focus();
        $("#divempresa").addClass("has-error");
        validado = false;
    } else {
        $("#divempresa").removeClass("has-error").addClass("has-success");


    }

    if (!validado)
        alert(campos);

    return validado;

}

function ValidarConta() {

    let validado = true;
    let campos = "";

    if ($("#banco").val().trim() == "") {
        campos = campos + "Preencher o campo Nome do banco\n";
        $("#banco").focus();
        $("#divbanco").addClass("has-error");
        validado = false;
    } else {
        $("#divbanco").removeClass("has-error").addClass("has-success");


    }

    if ($("#agencia").val().trim() == "") {
        campos = campos + "Preencher o campo Agência\n";
        $("#agencia").focus();
        $("#divagencia").addClass("has-error");
        validado = false;
    } else {
        $("#divagencia").removeClass("has-error").addClass("has-success");


    }

    if ($("#numero").val().trim() == "") {
        campos = campos + "Preencher o campo Número da conta\n";
        $("#numero").focus();
        $("#divnumero").addClass("has-error");
        validado = false;
    } else {
        $("#divnumero").removeClass("has-error").addClass("has-success");


    }

    if ($("#saldo").val().trim() == "") {
        campos = campos + "Preencher o campo Saldo\n";
        $("#saldo").focus();
        $("#divsaldo").addClass("has-error");
        validado = false;
    } else {
        $("#divsaldo").removeClass("has-error").addClass("has-success");


    }

    if (!validado)
        alert(campos);

    return validado;

}

function ValidarMovimento() {

    let validado = true;
    let campos = "";

    if ($("#tipo").val() == "") {
        campos = campos + "Selecione o Tipo do movimento\n";
        $("#tipo").focus();
        $("#divtipo").addClass("has-error");
        validado = false;
    } else {
        $("#divtipo").removeClass("has-error").addClass("has-success");


    }

    if ($("#data").val().trim() == "") {
        campos = campos + "Preencher o campo Data\n";
        $("#data").focus();
        $("#divdata").addClass("has-error");
        validado = false;
    } else {
        $("#divdata").removeClass("has-error").addClass("has-success");


    }

    if ($("#valor").val().trim() == "") {
        campos = campos + "Preencher o campo Valor\n";
        $("#valor").focus();
        $("#divvalor").addClass("has-error");
        validado = false;
    } else {
        $("#divvalor").removeClass("has-error").addClass("has-success");


    }

    if ($("#categoria").val() == "") {
        campos = campos + "Selecione a Categoria\n";
        $("#categoria").focus();
        $("#divcategoria").addClass("has-error");
        validado = false;
    } else {
        $("#divcategoria").removeClass("has-error").addClass("has-success");


    }

    if ($("#empresa").val() == "") {
        campos = campos + "Selecione a Empresa\n";
        $("#empresa").focus();
        $("#divempresa").addClass("has-error");
        validado = false;
    } else {
        $("#divempresa").removeClass("has-error").addClass("has-success");


    }

    if ($("#conta").val() == "") {
        campos = campos + "Selecione a Conta\n";
        $("#conta").focus();
        $("#divconta").addClass("has-error");
        validado = false;
    } else {
        $("#divconta").removeClass("has-error").addClass("has-success");


    }

    if (!validado)
        alert(campos);

    return validado;

}

function ValidarConsultaPeriodo() {

    let validado = true;
    let campos = "";

    if ($("#datainicial").val().trim() == "") {
        campos = campos + "Selecione a Data inicial\n";
        $("#datainicial").focus();
        $("#divdatainicial").addClass("has-error");
        validado = false;
    } else {
        $("#divdatainicial").removeClass("has-error").addClass("has-success");


    }

    if ($("#datafinal").val().trim() == "") {
        campos = campos + "Selecione a Data final\n";
        $("#datafinal").focus();
        $("#divdatafinal").addClass("has-error");
        validado = false;
    } else {
        $("#divdatafinal").removeClass("has-error").addClass("has-success");


    }

    if (!validado)
        alert(campos);

    return validado;

}

function ValidarLogin() {

    let validado = true;
    let campos = "";

    if ($("#email").val().trim() == "") {
        campos = campos + "Preencher o campo E-mail\n";
        $("#email").focus();
        $("#divemail").addClass("has-error");
        validado = false;
    } else {
        $("#divemail").removeClass("has-error").addClass("has-success");


    }

    if ($("#senha").val().trim() == "") {
        campos = campos + "Preencher o campo Senha\n";
        $("#senha").focus();
        $("#divsenha").addClass("has-error");
        validado = false;
    } else {
        $("#divsenha").removeClass("has-error").addClass("has-success");

    }

    if (!validado)
        alert(campos);

    return validado;
}

function ValidarCadastro() {

    let validado = true;
    let campos = "";

    if ($("#nome").val().trim() == "") {
        campos = campos + "Preencher o campo Nome\n";
        $("#divnome").addClass("has-error");
        $("#nome").focus();
        validado = false;
    } else {
        $("#divnome").removeClass("has-error").addClass("has-success");
    }

    if ($("#email").val().trim() == "") {
        campos = campos + "Preencher o campo E-mail\n";
        $("#divemail").addClass("has-error");
        $("#email").focus();
        validado = false;
    } else {
        $("#divemail").removeClass("has-error").addClass("has-success");
    }

    if ($("#senha").val().trim() == "") {
        campos = campos + "Preencher o campo Senha\n";
        $("#divsenha").addClass("has-error");
        $("#senha").focus();
        validado = false;
    } else if ($("#senha").val().trim().length < 6) {
        campos = campos + "A senha deverá conter no mínimo 6 caracteres\n";
        $("#divsenha").addClass("has-error");
        $("#senha").focus();
        validado = false;
    } else {
        $("#divsenha").removeClass("has-error").addClass("has-success");
    }

    if ($("#senha").val().trim() != $("#rsenha").val().trim()) {
        campos = campos + "O campo senha e repetir senha deverão ser iguais\n";
        $("#divrsenha").addClass("has-error");
        $("#rsenha").focus();
        validado = false;
    } else {
        $("#divrsenha").removeClass("has-error").addClass("has-success");
    }

    if ($("#rsenha").val().trim() == "") {
        campos = campos + "Preencher o campo Repetir Senha\n";
        $("#divrsenha").addClass("has-error");
        $("#rsenha").focus();
        validado = false;
    } else {
        $("#divrsenha").removeClass("has-error").addClass("has-success");
    }

    if (!validado) {
        alert(campos);
    }

    return validado;

}