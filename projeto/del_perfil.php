<?php

require_once('./model/ManterPerfil.php');
require_once('./model/Perfil.php');

$db_perfil = new ManterPerfil();
$perfil = new Perfil();

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;

if ($id > 0) {
    $db_perfil->excluir($id);
    header('Location: perfil.php');
} else {
    echo 'Falta de parâmetro!';
    header('Location: perfil.php');
}
