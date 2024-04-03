<?php

require_once('./actions/ManterInstancia.php');

$db_instancia = new ManterInstancia();

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;

if ($id > 0) {
    $db_instancia->excluir($id);
    header('Location: instancias.php');
} else {
    echo 'Falta de parâmetro!';
    header('Location: instancias.php');
}
