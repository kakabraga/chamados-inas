<?php


require_once('./actions/ManterUsuario.php');
require_once('./dto/Usuario.php');

$db_usuario = new ManterUsuario();
$usuario = new Usuario();

$usuario->id            = isset($_POST['id']) ? $_POST['id'] : 0;
$usuario->login         = addslashes($_POST['login']);
$usuario->nome          = addslashes($_POST['nome']);
$usuario->matricula     = $_POST['matricula'];
$usuario->email         = $_POST['email'];
$usuario->nascimento    = $_POST['nascimento'];
$usuario->whatsapp      = $_POST['whatsapp'];
$usuario->linkedin      = $_POST['linkedin'];
$usuario->equipe        = $_POST['equipe'];
$usuario->setor         = $_POST['setor'];
$usuario->perfil        = $_POST['perfil'];
$usuario->ativo         = isset($_POST['ativo']) ? $_POST['ativo'] : 1;


//print_r($usuario);
$db_usuario->salvar($usuario);

header('Location: usuarios.php');

