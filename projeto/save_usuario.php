<?php

require_once('./model/ManterUsuario.php');
require_once('./model/Usuario.php');

$db_usuario = new ManterUsuario();
$u = new Usuario();

$altera = isset($_POST['altera']) ? $_POST['altera'] : 0;
$matricula = $_POST['matricula'];
$nome = $_POST['nome'];
$setor = $_POST['setor'];
$perfil = $_POST['perfil'];
$senha = $_POST['senha'];

$u->matricula = $matricula;
$u->nome = $nome;
$u->idsetor = $setor;
$u->idperfil = $perfil;
$u->senha = $senha;

//print_r($u);

$db_usuario->salvar($u, $altera);
header('Location: usuarios.php');

