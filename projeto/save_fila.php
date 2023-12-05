<?php

require_once('./actions/ManterFila.php');
require_once('./dto/Fila.php');

$db_fila = new ManterFila();
$f = new Fila();

$id = isset($_POST['id']) ? $_POST['id'] : 0;
$nome = $_POST['nome'];
$id_servico = $_POST['servico'];

$f->id = $id;
$f->nome = $nome;
$f->servico = $id_servico;

$db_fila->salvar($f);
header('Location: filas.php');

