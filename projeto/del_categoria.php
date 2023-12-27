<?php

require_once('./actions/ManterCategoria.php');
require_once('./dto/Categoria.php');

$db_categoria = new ManterCategoria();
$categoria= new Categoria();

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;

if ($id > 0) {
    $db_categoria->excluir($id);
    header('Location: categorias.php');
} else {
    echo 'Falta de parâmetro!';
    header('Location: categorias.php');
}
