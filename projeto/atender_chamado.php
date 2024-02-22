<?php

require_once('./actions/ManterChamado.php');
require_once('./actions/ManterInteracao.php');
require_once('./dto/Chamado.php');
require_once('./dto/Interacao.php');

$db_chamado = new ManterChamado();
$c = new Chamado();

$id = isset($_POST['id']) ? $_POST['id'] : 0;
$atendente = isset($_POST['atendente']) ? $_POST['atendente'] : 0;
$categoria = isset($_POST['categoria']) ? $_POST['categoria'] : '';

$c->id = $id;
$c->categoria = $categoria;
$c->atendente = $atendente;
$db_chamado->atender($c);

// Registrando interação
$db_interacao = new ManterInteracao();
$i = new Interacao();
$i->texto   = "Início do atendimento do chamado!";
$i->usuario = $atendente;
$i->chamado = $id;
$db_interacao->salvar($i);

header('Location: chamados.php');

