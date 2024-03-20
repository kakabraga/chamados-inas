<?php 
	include_once('actions/ManterEquipe.php'); 

    $manterEquipe = new ManterEquipe();

    $id_equipe = $_REQUEST['id_equipe'];
        
	$lista = $manterEquipe->getParticimantesPorId($id_equipe);
    
    echo "<option value=''>Selecione</option>";
    foreach ($lista as $obj) {
        echo "<option value='".$obj->id."'>".$obj->nome."</option>";
    }

