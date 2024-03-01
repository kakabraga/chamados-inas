<?php
	include_once('actions/ManterUsuario.php'); 
    include_once('actions/ManterSetor.php'); 
	
	$manterUsuario = new ManterUsuario();
    $manterSetor = new ManterSetor();
	
	$lista = $manterUsuario->listarAniversariantes();
    echo '<ul class="list-group" style="width:400px;">';
    foreach ($lista as $obj) {
        
        echo '<li class="list-group-item d-flex justify-content-between align-items-center">
            <span style="font-size: 11px;">< href="perfil_usuario.php?id='.$obj->id.'">'.$obj->nome
            .'</a> </span><span class="badge badge-warning badge-pill">'
            .$manterSetor->getSetorPorId($obj->setor)->sigla
            .'</span><span class="badge badge-primary badge-pill">'
            .$obj->dia.'/'.$obj->mes
            .'</span>
        </li>';         
    }
    echo "</ul>";
