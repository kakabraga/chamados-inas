<?php

require_once('./actions/ManterUsuario.php');
require_once('./dto/Usuario.php');

$db_usuario = new ManterUsuario();
$usuario = new Usuario();

$id_modulo = isset($_REQUEST['id_modulo']) ? $_REQUEST['id_modulo'] : 0;
$id_usuario = isset($_REQUEST['id_usuario']) ? $_REQUEST['id_usuario'] : 0;

if ($id_usuario > 0) {
    $db_usuario->removerAcesso($id_modulo,$id_usuario);
    header('Location: gerenciar_acessos.php?id='.$id_usuario);
} else {
    echo 'Falta de parâmetro!';
    header('Location: gerenciar_acessos.php?id='.$id_usuario);
}
