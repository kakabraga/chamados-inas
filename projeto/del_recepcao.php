<?php

require_once('./actions/ManterRecepcao.php');

$db_recepcao = new ManterRecepcao();

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;

if ($id > 0) {
    $db_recepcao->excluir($id);
    header('Location: recepcoes.php');
} else {
    echo 'Falta de parâmetro!';
    header('Location: recepcoes.php');
}
