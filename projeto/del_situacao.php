<?php

require_once('./actions/ManterSituacaoProcessual.php');
require_once('./dto/SituacaoProcessual.php');

$db_situacao = new ManterSituacaoProcessual();
$situacao= new SituacaoProcessual();

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;

if ($id > 0) {
    $db_situacao->excluir($id);
    header('Location: situacoes_processuais.php');
} else {
    echo 'Falta de parâmetro!';
    header('Location: situacoes_processuais.php');
}
