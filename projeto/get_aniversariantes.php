<?php
	include_once('actions/ManterUsuario.php'); 
    include_once('actions/ManterSetor.php'); 
	
	$manterUsuario = new ManterUsuario();
    $manterSetor = new ManterSetor();
	
	$lista = $manterUsuario->listarAniversariantes();
    echo '<ul class="list-group">';
    foreach ($lista as $obj) {
        
        echo '<li class="list-group-item d-flex justify-content-between align-items-center">
            <span style="font-size: 10px;">'.$obj->nome.' ('.$manterSetor->getSetorPorId($obj->setor)->sigla.
            ') <span class="badge badge-primary badge-pill">'.$obj->dia.'/'.$obj->mes.'</span>
        </li>';         
    }
    echo "</ul>";
