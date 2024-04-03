<?php

require_once('./actions/ManterInstancia.php');
require_once('./dto/Instancia.php');

$db_instancia = new ManterInstancia();
$i = new Instancia();

$id = isset($_POST['id']) ? $_POST['id'] : 0;
$instancia = $_POST['instancia'];

$i->id = $id;
$i->instancia = $instancia;

$db_instancia->salvar($i);
header('Location: instancias.php');

