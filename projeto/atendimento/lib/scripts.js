var senhaAtualNome   = $("#senhaAtualNome");
var senhaAtualGuiche  = $("#senhaAtualGuiche");

var ultimaSenhaNome1   = $("#ultimaSenhaNome1");
var ultimaSenhaGuiche1  = $("#ultimaSenhaGuiche1");
var ultimaSenhaNome2   = $("#ultimaSenhaNome2");
var ultimaSenhaGuiche2  = $("#ultimaSenhaGuiche2");
var ultimaSenhaNome3   = $("#ultimaSenhaNome3");
var ultimaSenhaGuiche3  = $("#ultimaSenhaGuiche3");

var chamadoAtual = JSON.parse('{"id":null,"nome":null,"preferencial":null,"entrada":null,"qtd_chamadas":null,"atendido":null,"servico":null,"chamar":null,"ultima_chamada":null,"excluir":null,"status":true,"msg":null}');

var audioChamada = $("#audioChamada");

function getProximo() {
    //$("#fila").html('Atualizando...');
    $.get( "../get_proximo_painel.php")
    .done(function(data) {
        var resp = JSON.parse(data);
        if(resp.id != chamadoAtual.id && resp.qtd_chamadas > chamadoAtual.qtd_chamadas){
            chamadoAtual = resp;
            console.log(chamadoAtual);
            senhaAtualNome.html(resp.nome);
            senhaAtualGuiche.html(resp.ultima_chamada);
            audioChamada.trigger("play");
        }
    });

}
setInterval(getProximo, 10000);
