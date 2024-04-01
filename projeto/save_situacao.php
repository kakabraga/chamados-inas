<?php

require_once('./actions/ManterSituacaoProcessual.php');
require_once('./dto/SituacaoProcessual.php');

$db_situacao = new ManterSituacaoProcessual();
$s = new SituacaoProcessual();

$id = isset($_POST['id']) ? $_POST['id'] : 0;
$situacao = $_POST['situacao'];

$s->id = $id;
$s->situacao = $situacao;

$db_situacao->salvar($s);
header('Location: situacoes_processuais.php');

