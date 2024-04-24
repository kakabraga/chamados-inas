<?php
  
require_once('./actions/ManterUsuario.php');

$db_usuario = new ManterUsuario();

$id            = isset($_POST['id']) ? $_POST['id'] : 0;
$agenda         = isset($_POST['agenda']) ? $_POST['agenda'] : 0;


//print_r($usuario);
if($agenda == 1) {
    $db_usuario->permitirAgenda($id);
} else {
    $db_usuario->removerAgenda($id);
}

header('Location: usuarios.php');

