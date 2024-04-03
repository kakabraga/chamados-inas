<?php

require_once('./actions/ManterClasseJudicial.php');

$db_classe_judicial = new ManterClasseJudicial();

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;

if ($id > 0) {
    $db_classe_judicial->excluir($id);
    header('Location: classes_judiciais.php');
} else {
    echo 'Falta de parâmetro!';
    header('Location: classes_judiciais.php');
}
