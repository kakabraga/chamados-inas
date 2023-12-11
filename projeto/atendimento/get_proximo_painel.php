<?php
    include_once('../actions/ManterFila.php');
    $manterFila = new ManterFila();
	
	$lista = $manterFila->getProximoChamadoPainel();

    echo json_encode($lista);
