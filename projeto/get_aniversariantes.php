<?php
	include_once('actions/ManterUsuario.php'); 
	
	$manterUsuario = new ManterUsuario();
	
	$lista = $manterUsuario->listarAniversariantes();
    echo '<ul class="list-group">';
    foreach ($lista as $obj) {
        
        echo '<li class="list-group-item d-flex justify-content-between align-items-center">
            '.$obj->nome.'
            <span class="badge badge-primary badge-pill">'.$obj->dia.'/'.$obj->mes.'</span>
        </li>';         
    }
    echo "</ul>";
