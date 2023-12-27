<?php

require_once('./actions/ManterCategoria.php');
require_once('./dto/Categoria.php');

$db_categoria = new ManterCategoria();
$c = new Categoria();

$id = isset($_POST['id']) ? $_POST['id'] : 0;
$nome = $_POST['nome'];
$descricao = isset($_POST['descricao']) ? $_POST['descricao'] : '';

$c->id = $id;
$c->nome = $nome;
$c->descricao = $descricao;

$db_categoria->salvar($c);
header('Location: categorias.php');

