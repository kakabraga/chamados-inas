<?php

require_once('./model/ManterPerfil.php');
require_once('./model/Perfil.php');

$db_perfil = new ManterPerfil();
$p = new Perfil();

$id = isset($_POST['id']) ? $_POST['id'] : 0;
$perfil = $_POST['perfil'];

$p->id = $id;
$p->perfil = $perfil;

$db_perfil->salvar($p);
header('Location: perfil.php');

