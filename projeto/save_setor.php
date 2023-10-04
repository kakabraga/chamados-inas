<?php

require_once('./model/ManterSetor.php');
require_once('./model/Setor.php');

$db_setor = new ManterSetor();
$p = new Setor();

$id = isset($_POST['id']) ? $_POST['id'] : 0;
$sigla = $_POST['sigla'];
$descricao = $_POST['descricao'];

$p->id = $id;
$p->sigla = $sigla;
$p->descricao = $descricao;

$db_setor->salvar($p);
header('Location: setores.php');

