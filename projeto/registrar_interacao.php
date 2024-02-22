<?php

require_once('./actions/ManterInteracao.php');
require_once('./actions/ManterChamado.php');
require_once('./dto/Interacao.php');

$db_interacao = new ManterInteracao();
$db_chamado = new ManterChamado();
$i = new Interacao();

$id          = isset($_POST['id']) ? $_POST['id'] : 0;
$texto       = $_POST['texto'];
$id_usuario  = $_POST['id_usuario'];
$id_chamado  = $_POST['id_chamado'];
$finalizar   = isset($_POST['finalizar']) ? $_POST['finalizar'] : 0;

$i->id      =  $id;
$i->texto   = $texto;
$i->usuario = $id_usuario;
$i->chamado = $id_chamado;

$db_interacao->salvar($i);

if($finalizar > 0){
    
    $db_chamado->concluir($id_chamado);
    // Registrando interação
    $i->texto   = "Chamado concluído!";
    $i->usuario = $id_usuario;
    $i->chamado = $id_chamado;
    $db_interacao->salvar($i);
}

header('Location: gerenciar_interacoes.php?id='.$id_chamado);



