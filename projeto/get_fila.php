<?php
	include_once('actions/ManterAtendimento.php'); 
    include_once('actions/ManterGuiche.php');
    include_once('actions/ManterFila.php');
	
	$manterAtendimento = new ManterAtendimento();
    $manterFila = new ManterFila();
    $manterGuiche = new ManterGuiche();
	
	$lista = $manterFila->getFila();
        $count = 0;
        foreach ($lista as $obj) {
            $count++;
            $txt_preferencial = " - ";
            if($obj->preferencial== 1){
                $txt_preferencial = "<b>Sim</b>";
            }
            $txt_chamado = " - ";
            if($obj->ultima_chamada!= null){
                $txt_chamado = "<b>Sim</b>";
            }
            echo "<tr>";
            echo "  <td>".$count."</td>";
            echo "  <td>".$obj->nome."</td>";
            echo "  <td>".$txt_preferencial."</td>";
            echo "  <td>Guichê ".$manterAtendimento->getGuichePorFila($obj->id)->numero."</td>";
            echo "</tr>";
        }

