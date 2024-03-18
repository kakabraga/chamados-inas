<?php

include_once('actions/ManterEquipe.php');

$manterEquipe = new ManterEquipe();

$id_equipe  = $_REQUEST['id_equipe'];
$id_usuario = $_REQUEST['id_usuario'];
$op = isset($_REQUEST['op']) ? $_REQUEST['op'] : 1;

if ($op == 1) {
    $manterEquipe->add($id_equipe,$id_usuario);
    header('Location: gerenciar_equipes.php?id='.$id_equipe);
} else {
    $manterEquipe->del($id_equipe,$id_usuario);
    header('Location: gerenciar_equipes.php?id='.$id_equipe);
}
