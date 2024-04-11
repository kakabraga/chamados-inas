<?php
	include_once('actions/ManterReserva.php'); 
	
	$manterReserva = new ManterReserva();
	
	$lista = $manterReserva->listar();
    $reservas=[];
    foreach ($lista as $obj) {
        $reservas[] = [
            'id'=>  $obj->id,
            'title'=>  $obj->sala . " - " . $obj->equipamento,
            'color'=>  '#0000FE',
            'start'=>  date('Y-m-d H:i', strtotime($obj->inicio)),
            'end'=>  date('Y-m-d H:i', strtotime($obj->termino)),

        ];
    }

    echo json_encode($reservas);
