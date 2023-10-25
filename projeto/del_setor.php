<?php

require_once('./actions/ManterSetor.php');
require_once('./dto/Setor.php');

$db_setor = new ManterSetor();
$setor= new Setor();

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;

if ($id > 0) {
    $db_setor->excluir($id);
    header('Location: setores.php');
} else {
    echo 'Falta de parâmetro!';
    header('Location: setores.php');
}
