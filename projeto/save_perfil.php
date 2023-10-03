<?php

require_once('./model/ManterPerfil.php');
require_once('./model/Perfil.php');

$db_perfil = new ManterPerfil();
$p = new Perfil();

$id = isset($_POST['id']) ? $_POST['id'] : 0;
$nome = $_POST['nome'];

$p->id = $id;
$p->nome = $nome;

$db_perfil->salvar($p);
header('Location: perfil.php');

