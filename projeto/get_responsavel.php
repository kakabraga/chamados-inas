<?php 
	include_once('actions/ManterEquipe.php'); 

    $manterEquipe = new ManterEquipe();

    $id_equipe = $_REQUEST['id_equipe'];
    $id_usuario = isset($_REQUEST['id_usuario']) ? $_REQUEST['id_usuario'] : 0;
        
	$lista = $manterEquipe->getParticimantesPorId($id_equipe);
    
    echo "<option value=''>Selecione</option>";
    foreach ($lista as $obj) {
        $selecionado = "";
        if ($obj->id === $id_usuario ) {
            $selecionado = " selected";
        }
        echo "<option value='".$obj->id."' ".$selecionado.">".$obj->nome."</option>";
    }

