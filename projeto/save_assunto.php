<?php

require_once('./actions/ManterAssunto.php');
require_once('./dto/Assunto.php');

$db_assunto = new ManterAssunto();
$s = new Assunto();

$id = isset($_POST['id']) ? $_POST['id'] : 0;
$assunto = $_POST['assunto'];

$s->id = $id;
$s->assunto = $assunto;

$db_assunto->salvar($s);
header('Location: assuntos.php');

