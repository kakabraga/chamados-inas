<?php

require_once('./model/ManterSetor.php');
require_once('./model/Setor.php');

$db_setor = new ManterSetor();
$setor = new Setor();

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;

if ($id > 0) {
    $db_setor->excluir($id);
    header('Location: setor.php');
} else {
    echo 'Falta de parâmetro!';
    header('Location: setores.php');
}
