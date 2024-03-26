<?php

include_once('actions/ManterEquipe.php');
require_once('./actions/ManterNotificacao.php');
require_once('./dto/Notificacao.php');

$db_notificacao = new ManterNotificacao();
$n = new Notificacao();

$manterEquipe = new ManterEquipe();

$id_equipe  = $_REQUEST['id_equipe'];
$id_usuario = $_REQUEST['id_usuario'];
$op = isset($_REQUEST['op']) ? $_REQUEST['op'] : 1;


if ($op == 1) {
    $manterEquipe->add($id_equipe,$id_usuario);

    // Registrando notificação
    $n->texto   = "Você foi adicionado a uma equipe!";
    $n->usuario = $id_usuario;
    $n->link = 'gerenciar_equipe.php?id=' . $id_equipe;
    $n->tipo = 'equipe';
    $db_notificacao->salvar($n);

    header('Location: gerenciar_equipe.php?id='.$id_equipe);
} else {
    $manterEquipe->del($id_equipe,$id_usuario);

    // Registrando notificação
    $n->texto   = "Você foi removido de uma equipe!";
    $n->usuario = $id_usuario;
    $n->link = 'gerenciar_equipe.php?id=' . $id_equipe;
    $n->tipo = 'equipe';
    $db_notificacao->salvar($n);

    header('Location: gerenciar_equipe.php?id='.$id_equipe);
}
