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
            $txt_preferencial = "<center> - </center>";
            if($obj->preferencial== 1){
                $txt_preferencial = "<center><img src='img/check.svg' width='18%'></center>";
            }
            $txt_chamado = "<center> - </center>";
            if($obj->ultima_chamada!= null){
                $txt_chamado = "<center>Guichê ".$manterAtendimento->getGuichePorFila($obj->id)->numero."</center>";
            }
            echo "<tr>";
            echo "  <td>".$count."<sup>o</sup></td>";
            echo "  <td>".$obj->nome."</td>";
            echo "  <td>".$manterServico->getServicoPorId($obj->servico)->nome."</td>";
            echo "  <td>".$txt_preferencial."</td>";
            echo "  <td>".$txt_chamado."</td>";
            if($atender){
                echo "  <td>chamar</td>";
                if(isset($obj->guiche_chamador)){
                    if($obj->guiche_chamador == $guiche->id) {
                        echo "  <td align='center'><button class='btn btn-primary btn-sm' type='button' onclick='chamar(".$obj->id.",".$guiche->id.")'>Chamar +</button>&nbsp;&nbsp;<button class='btn btn-primary btn-sm' type='button' onclick='atender(".$obj->id.",".$guiche->id.")'>Atender</button></td>";
                    } else {
                        echo "  <td align='center'> - </td>";
                    }                    
                } else {
                    echo "  <td align='center'><button class='btn btn-primary btn-sm' type='button' onclick='chamar(".$obj->id.",".$obj->perfil.")'>Chamar</button></td>";                
                }
            }
            echo "</tr>";
        }

