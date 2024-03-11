<?php

require_once('./actions/ManterChamado.php');
require_once('./actions/ManterInteracao.php');
require_once('./actions/ManterNotificacao.php');
require_once('./dto/Notificacao.php');
require_once('./dto/Chamado.php');
require_once('./dto/Interacao.php');

$db_chamado = new ManterChamado();
$c = new Chamado();

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
$id_usuario = isset($_REQUEST['id_usuario']) ? $_REQUEST['id_usuario'] : 0;

$db_chamado->cancelar($id);

// Registrando interação
$db_interacao = new ManterInteracao();
$i = new Interacao();
$i->texto   = "Chamado cancelado!";
$i->usuario = $id_usuario;
$i->chamado = $id;
$db_interacao->salvar($i);


// Registrando notificação
$c = $db_chamado->getChamadoPorId($id);
if($id_usuario != $c->usuario){
    $db_notificacao = new ManterNotificacao();
    $n = new Notificacao();
    $n->texto   = "Seu chamado foi cancelado!";
    $n->usuario = $c->usuario;
    $n->link = 'gerenciar_interacoes.php?id=' . $id;
    $n->tipo = 'interacao';
    $db_notificacao->salvar($n);
}
header('Location: chamados.php');

