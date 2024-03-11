<?php

require_once('./actions/ManterChamado.php');
require_once('./actions/ManterInteracao.php');
require_once('./dto/Chamado.php');
require_once('./dto/Interacao.php');

$db_chamado = new ManterChamado();
$c = new Chamado();

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
$id_usuario = isset($_REQUEST['id_usuario']) ? $_REQUEST['id_usuario'] : 0;

$db_chamado->reabrir($id);

// Registrando interação
$db_interacao = new ManterInteracao();
$i = new Interacao();
$i->texto   = "Chamado reaberto!";
$i->usuario = $id_usuario;
$i->chamado = $id;
$db_interacao->salvar($i);

// Registrando notificação
$c = $db_chamado->getChamadoPorId($id);
$db_notificacao = new ManterNotificacao();
$n = new Notificacao();
if($id_usuario != $c->usuario){
    $n->usuario = $c->usuario;
} else {
    $n->usuario = $id_usuario;
}
$n->texto   = "Chamado foi reaberto!";
$n->usuario = $c->usuario;
$n->link = 'gerenciar_interacao.php?id=' . $id;
$n->tipo = 'interacao';
$db_notificacao->salvar($n);


header('Location: chamados.php');

