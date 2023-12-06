<?php

require_once('./actions/ManterFila.php');
require_once('./dto/Fila.php');
echo "Vixe";
exit;
$db_fila = new ManterFila();
$f = new Fila();

$id = isset($_POST['id']) ? $_POST['id'] : 0;
$nome = $_POST['nome'];
$id_servico = $_POST['servico'];
$preferencial = isset($_POST['preferencial']) ? $_POST['preferencial'] : 0;

$f->id = $id;
$f->nome = $nome;
$f->servico = $id_servico;
$f->preferencial = $preferencial;
print_r($f);

$db_fila->salvar($f);
header('Location: filas.php');

