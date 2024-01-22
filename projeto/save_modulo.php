<?php

require_once('./actions/ManterModulo.php');
require_once('./dto/Modulo.php');

$db_modulo = new ManterModulo();
$m = new Modulo();

$id = isset($_POST['id']) ? $_POST['id'] : 0;
$nome = $_POST['nome'];
$descricao = isset($_POST['descricao']) ? $_POST['descricao'] : '';

$m->id = $id;
$m->nome = $nome;
$m->descricao = $descricao;

$db_modulo->salvar($m);
header('Location: modulos.php');

