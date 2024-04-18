<?php

require_once('./actions/ManterAgenda.php');
require_once('./dto/Agenda.php');

$db_agenda = new ManterAgenda();
$a = new Agenda();

if(isset($_POST['delete'])){
    $id = isset($_POST['id']) ? $_POST['id'] : 0;
    $db_agenda->excluir($id);
} else { 
    $a->id = isset($_POST['id']) ? $_POST['id'] : 0;
    $a->titulo = $_POST['titulo'];
    $a->descricao = $_POST['descricao'];
    $a->cor = $_POST['cor'];
    $a->inicio = date('Y/m/d H:i:s', strtotime($_POST['inicio']));
    $a->termino = date('Y/m/d H:i:s', strtotime($_POST['termino']));
    $a->usuario = $_POST['id_usuario'];
    $db_agenda->salvar($a);
}

header('Location: agenda.php');

