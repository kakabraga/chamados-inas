<?php

require_once('./actions/ManterPergunta.php');
require_once('./dto/Pergunta.php');

$db_pergunta = new ManterPergunta();
$p = new Pergunta();

$id = isset($_POST['id']) ? $_POST['id'] : 0;
$descricao = isset($_POST['descricao']) ? $_POST['descricao'] : '';

$p->id = $id;
$p->descricao = $descricao;

$db_pergunta->salvar($p);
header('Location: perguntas.php');

