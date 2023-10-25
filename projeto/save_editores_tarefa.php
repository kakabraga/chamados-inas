<?php


require_once('./actions/ManterUsuario.php');

$db_usuario = new ManterUsuario();

//echo 'ID:' .$_POST['id'] . ' ACAO: '.$_POST['acao'] . ' ORDEM: '.$_POST['ordem'] . ' ETAPA: '.$_POST['etapa'] ;

$id     = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
$op   = isset($_REQUEST['op']) ? $_REQUEST['op'] : 'add';
$tarefa = $_REQUEST['tarefa'];

$db_usuario->salvarEditor($id,$tarefa,$op);

header('Location: gerenciar_etapas.php?tarefa='.$tarefa);

