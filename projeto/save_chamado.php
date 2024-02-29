<?php

require_once('./actions/ManterChamado.php');
require_once('./dto/Chamado.php');

$db_chamado = new ManterChamado();
$c = new Chamado();

$id_usuario = isset($_POST['usuario']) ? $_POST['usuario'] : 0;
$descricao = isset($_POST['descricao']) ? $_POST['descricao'] : '';
$red = isset($_POST['red']) ? $_POST['red'] : '';

$c->usuario = $id_usuario;
$c->descricao = $descricao;

$db_chamado->salvar($c);
if($red != ''){
    header('Location: ' . $red);
} else {
    header('Location: chamados.php');
}
