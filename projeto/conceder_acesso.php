<?php

require_once('./actions/ManterUsuario.php');
require_once('./dto/Usuario.php');

$db_usuario = new ManterUsuario();
$usuario = new Usuario();

$id_modulo  = $_REQUEST['id_modulo'];
$id_usuario = $_REQUEST['id_usuario'];
$id_perfil  = $_REQUEST['id_usuario'];

if (isset($_REQUEST['id_usuario'])) {
    $db_usuario->permitirAcesso($id_modulo,$id_usuario,$id_perfil);
    header('Location: gerenciar_acessos.php?id='.$id_usuario);
} else {
    echo 'Falta de parâmetro!';
    header('Location: gerenciar_acessos.php?id='.$id_usuario);
}
