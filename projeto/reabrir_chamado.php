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

header('Location: chamados.php');

