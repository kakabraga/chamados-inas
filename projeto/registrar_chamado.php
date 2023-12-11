<?php

require_once('./actions/ManterFila.php');

$db_fila = new ManterFila();

$id = $_REQUEST['id'];

$db_fila->chamouPainel($id);

