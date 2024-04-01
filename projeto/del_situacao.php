<?php

require_once('./actions/ManterSituacao.php');
require_once('./dto/Situacao.php');

$db_situacao = new ManterSituacao();
$situacao= new Situacao();

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;

if ($id > 0) {
    $db_situacao->excluir($id);
    header('Location: situacoes_processuais.php');
} else {
    echo 'Falta de parâmetro!';
    header('Location: situacoes_processuais.php');
}
