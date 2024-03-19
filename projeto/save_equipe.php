<?php

require_once('./actions/ManterEquipe.php');
require_once('./dto/Equipe.php');

$db_equipe = new ManterEquipe();
$e = new Equipe();

$id = isset($_POST['id']) ? $_POST['id'] : 0;
$criador = isset($_POST['criador']) ? $_POST['criador'] : 0;
$equipe = $_POST['equipe'];
$descricao = isset($_POST['descricao']) ? $_POST['descricao'] : '';

$e->id = $id;
$e->criador = $criador;
$e->equipe = $equipe;
$e->descricao = $descricao;

$db_equipe->salvar($e);
header('Location: equipes.php');

