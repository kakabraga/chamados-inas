<?php

require_once('./actions/ManterModulo.php');

$db_modulo = new ManterModulo();

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;

if ($id > 0) {
    $db_modulo->excluir($id);
    header('Location: modulos.php');
} else {
    echo 'Falta de parâmetro!';
    header('Location: modulos.php');
}
