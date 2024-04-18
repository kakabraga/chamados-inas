<?php

require_once('./actions/ManterAgenda.php');
require_once('./dto/Agenda.php');

if (isset($_POST['Event'][0]) && isset($_POST['Event'][1]) && isset($_POST['Event'][2])){
		
		
    $id_evento = $_POST['Event'][0];
    $inicio = $_POST['Event'][1];
    $termino = $_POST['Event'][2];

    $db_agenda = new ManterAgenda();
    $a = new Agenda();
    $a->id = $id_evento;
    $a->inicio = date('Y/m/d H:i:s', strtotime($inicio));
    $a->termino = date('Y/m/d H:i:s', strtotime($termino));


    $sth = $db_agenda->salvarData($a);
    if ($sth == false) {
        die ('Erro ao executar');
    }else{
        die ('OK');
    }

}

