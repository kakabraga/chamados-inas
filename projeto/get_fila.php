<?php
	include_once('actions/ManterAtendimento.php'); 
    include_once('actions/ManterServico.php');
    include_once('actions/ManterFila.php');
	
	$manterAtendimento = new ManterAtendimento();
    $manterFila = new ManterFila();
    $manterServico = new ManterServico();
	
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
                $txt_chamado = "  Guichê ".$manterAtendimento->getGuichePorFila($obj->id)->numero;
            }
            echo "<tr>";
            echo "  <td>".$count."<sup>o</sup></td>";
            echo "  <td>".$obj->nome."</td>";
            echo "  <td>".$manterAtendimento->getServicoPorId($obj->servico)->nome."</td>";
            echo "  <td>".$txt_preferencial."</td>";
            echo "  <td>".$txt_chamado."</td>";
            echo "</tr>";
        }

