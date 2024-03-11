<?php

require_once('./actions/ManterInteracao.php');
require_once('./actions/ManterChamado.php');
require_once('./dto/Interacao.php');

$db_interacao = new ManterInteracao();
$db_chamado = new ManterChamado();
$i = new Interacao();

$id          = isset($_POST['id']) ? $_POST['id'] : 0;
$texto       = $_POST['texto'];
$id_usuario  = $_POST['id_usuario'];
$id_chamado  = $_POST['id_chamado'];
$finalizar   = isset($_POST['finalizar']) ? $_POST['finalizar'] : 0;

$i->id      =  $id;
$i->texto   = $texto;
$i->usuario = $id_usuario;
$i->chamado = $id_chamado;

$db_interacao->salvar($i);
// Registrando notificação
$c = $db_chamado->getChamadoPorId($id);
$db_notificacao = new ManterNotificacao();
$n = new Notificacao();

$notificado = false;
if($finalizar > 0){
    $db_chamado->concluir($id_chamado);
    // Registrando interação
    $i->id      = 0;
    $i->texto   = "Chamado concluído!";
    $i->usuario = $id_usuario;
    $i->chamado = $id_chamado;
    $db_interacao->salvar($i);

    // Registrando notificação
    $n->usuario = $c->usuario;
    $n->texto   = "Seu chamado foi concluído!";
    $n->usuario = $c->usuario;
    $n->link = 'gerenciar_interacao.php?id=' . $id_chamado;
    $n->tipo = 'interacao';
    $db_notificacao->salvar($n);
}
if (!$notificado) {
    // Registrando notificação
    if($id_usuario != $c->usuario){
        $n->usuario = $c->usuario;
    } else {
        $n->usuario = $id_usuario;
    }
    $n->texto   = "Nova interação no chamado!";
    $n->link = 'gerenciar_interacao.php?id=' . $id_chamado;
    $n->tipo = 'interacao';
    $db_notificacao->salvar($n);
}

header('Location: gerenciar_interacoes.php?id='.$id_chamado);



