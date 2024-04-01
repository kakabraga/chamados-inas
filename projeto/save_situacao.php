<?php

require_once('./actions/ManterSituacao.php');
require_once('./dto/Situacao.php');

$db_situacao = new ManterSituacao();
$s = new Situacao();

$id = isset($_POST['id']) ? $_POST['id'] : 0;
$situacao = $_POST['situacao'];

$s->id = $id;
$s->situacao = $situacao;

$db_situacao->salvar($s);
header('Location: situacoes_processuais.php');

