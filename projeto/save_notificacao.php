<?php


require_once('./actions/ManterNotificacao.php');
require_once('./dto/Notificacao.php');

$db_notificacao = new ManterNotificacao();
$n = new Notificacao();

//echo 'ID:' .$_POST['id'] . ' ACAO: '.$_POST['notificacao'] . ' ORDEM: '.$_POST['ordem'] . ' ETAPA: '.$_POST['etapa'] ;

$id         = isset($_POST['id']) ? $_POST['id'] : 0;
$texto      = $_POST['texto'];
$tipo       = $_POST['tipo'];
$link       = $_POST['link'];
$id_usuario = $_POST['id_usuario'];

$n->id      = $id;
$n->texto   = $texto;
$n->tipo    = $tipo;   
$n->link    = $link;
$n->usuario = $id_usuario;

//print_r($notificacao);

$db_notificacao->salvar($n);

header('Location: index.php');

