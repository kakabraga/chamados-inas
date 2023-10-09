function validaSenha() {
    var senha = $("#cad_senha").val();
    var altera = $("#altera").val();
    if(senha == "" && altera == 1){
        return true;
    } else {
        if (senha.length < 6 || senha.length > 12) {
            $('#erro_senha').css('display', 'block');
            //         $('#cad_senha').focus();
            return false;
        } else {
            $('#erro_senha').css('display', 'none');
            return true;
        }
    }
    return true;
}

function validaConfirmaSenha() {
    var senha = $("#cad_senha").val();
    var confirma_senha = $("#cad_confirma_senha").val();
    var altera = $("#altera").val();
    if(senha == "" && confirma_senha == "" && altera == 1 ){
        return true;
    } else {
        if (confirma_senha == senha) {
            $('#erro_confirma_senha').css('display', 'none');
            return true;
        } else {
            $('#erro_confirma_senha').css('display', 'block');
            //       $('#cad_confirma_senha').focus();
            return false;
        }
    }

    return true;
}
