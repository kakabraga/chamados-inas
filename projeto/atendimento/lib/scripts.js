var senhaAtualNome   = $("#senhaAtualNome");
var senhaAtualGuiche  = $("#senhaAtualGuiche");

var ultimaSenhaNome1   = $("#ultimaSenhaNome1");
var ultimaSenhaGuiche1  = $("#ultimaSenhaGuiche1");
var ultimaSenhaNome2   = $("#ultimaSenhaNome2");
var ultimaSenhaGuiche2  = $("#ultimaSenhaGuiche2");
var ultimaSenhaNome3   = $("#ultimaSenhaNome3");
var ultimaSenhaGuiche3  = $("#ultimaSenhaGuiche3");

var audioChamada = $("#audioChamada");

function getProximo() {
    //$("#fila").html('Atualizando...');
    $.get( "../get_proximo_painel.php")
    .done(function(data) {
        var resp = JSON.parse(data);
        console.log(resp);
        $("#fila").html(data);
    });

}
setInterval(getProximo, 10000);
