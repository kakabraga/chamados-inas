<?php

require_once('./actions/ManterLiminar.php');
require_once('./dto/Liminar.php');

$db_servico = new ManterLiminar();
$s = new Liminar();

$id = isset($_POST['id']) ? $_POST['id'] : 0;
$tipo = $_POST['tipo'];

$s->id = $id;
$s->tipo = $tipo;

$db_servico->salvar($s);
header('Location: tipos_liminar.php');

