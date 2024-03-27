<?php

require_once('./actions/ManterServico.php');
require_once('./dto/Servico.php');

$db_servico = new ManterServico();
$servico= new Servico();

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;

if ($id > 0) {
    $db_servico->excluir($id);
    header('Location: servicos.php');
} else {
    echo 'Falta de parâmetro!';
    header('Location: servicos.php');
}
