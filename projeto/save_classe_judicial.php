<?php

require_once('./actions/ManterClasseJudicial.php');
require_once('./dto/ClasseJudicial.php');

$db_classe_judicial = new ManterClasseJudicial();
$cj = new ClasseJudicial();

$cjd = isset($_POST['id']) ? $_POST['id'] : 0;
$classe_judicial = $_POST['classe_judicial'];

$cj->id = $cjd;
$cj->classe_judicial = $classe_judicial;

$db_classe_judicial->salvar($cj);
header('Location: classes_judiciais.php');

