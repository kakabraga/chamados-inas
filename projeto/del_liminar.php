<?php

require_once('./actions/ManterLiminar.php');
require_once('./dto/Liminar.php');

$db_liminar = new ManterLiminar();
$liminar= new Liminar();

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;

if ($id > 0) {
    $db_liminar->excluir($id);
    header('Location: tipos_liminar.php');
} else {
    echo 'Falta de parâmetro!';
    header('Location: tipos_liminar.php');
}
