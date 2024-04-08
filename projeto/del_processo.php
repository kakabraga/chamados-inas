<?php

require_once('./actions/ManterProcesso.php');
require_once('./dto/Processo.php');

$db_processo = new ManterProcesso();
$processo= new Processo();

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;

if ($id > 0) {
    $db_processo->excluir($id);
    header('Location: processos.php');
} else {
    echo 'Falta de parâmetro!';
    header('Location: processos.php');
}
