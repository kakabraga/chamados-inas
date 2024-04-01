<?php

require_once('./actions/ManterAssunto.php');
require_once('./dto/Assunto.php');

$db_assunto = new ManterAssunto();
$assunto= new Assunto();

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;

if ($id > 0) {
    $db_assunto->excluir($id);
    header('Location: assuntos.php');
} else {
    echo 'Falta de parâmetro!';
    header('Location: assuntos.php');
}
