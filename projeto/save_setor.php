<?php

require_once('./actions/ManterSetor.php');
require_once('./dto/Setor.php');

$db_setor = new ManterSetor();
$s = new Setor();

$id = isset($_POST['id']) ? $_POST['id'] : 0;
$sigla = $_POST['sigla'];
$descricao = isset($_POST['descricao']) ? $_POST['descricao'] : '';

$s->id = $id;
$s->sigla = $sigla;
$s->descricao = $descricao;

$db_setor->salvar($s);
header('Location: setores.php');

