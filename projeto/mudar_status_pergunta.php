<?php

require_once('./actions/ManterPergunta.php');

$db_pergunta = new ManterPergunta();

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
$status = isset($_REQUEST['status']) ? $_REQUEST['status'] : 0;
if ($id > 0) {
    if ($status == 0) {
        $db_pergunta->despublicar($id);
    } else {
        $db_pergunta->publicar($id);
    }
    header('Location: perguntas.php');
} else {
    echo 'Falta de parâmetro!';
    header('Location: perguntas.php');
}
