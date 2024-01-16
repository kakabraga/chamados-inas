<?php

require_once('./actions/ManterChamado.php');
require_once('./dto/Chamado.php');

$db_chamado = new ManterChamado();
$c = new Chamado();

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;

$db_chamado->reabrir($id);

header('Location: chamados.php');

