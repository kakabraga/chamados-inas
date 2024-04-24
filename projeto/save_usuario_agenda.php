<?php
  
require_once('./actions/ManterUsuario.php');

$db_usuario = new ManterUsuario();

$id            = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
$agenda         = isset($_REQUEST['agenda']) ? $_REQUEST['agenda'] : 0;


//print_r($usuario);
if($agenda == 1) {
    $db_usuario->permitirAgenda($id);
} else {
    $db_usuario->removerAgenda($id);
}

header('Location: usuarios.php');

