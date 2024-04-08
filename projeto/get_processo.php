<?php
	include_once('actions/ManterProcesso.php'); 
    include_once('actions/ManterAssunto.php'); 
	
	$manterProcesso = new ManterProcesso();
    $manterAssunto = new ManterAssunto();
	
	$lista = $manterProcesso->listar();
        
        foreach ($lista as $obj) {
            echo "<tr>";
            echo "  <td>".$obj->numero."</td>";
            echo "  <td>".$obj->cpf."</td>";
            echo "  <td>".$obj->beneficiario."</td>";
            echo "  <td>".date('d/m/Y', strtotime($obj->autuacao))."</td>";
            echo "  <td>".$manterAssunto->getAssuntoPorId($obj->assunto)->assunto."</td>";
            echo "  <td>".$obj->valor_causa."</td>";
            if($obj->excluir){
                echo "  <td align='center'><button class='btn btn-primary btn-sm' type='button' onclick='alterar(".$obj->id.",\"".$obj->numero."\")'><i class='fas fa-edit'></i></button>&nbsp;&nbsp;<button class='btn btn-danger btn-sm' type='button' onclick='excluir(".$obj->id.",\"".$obj->numero."\")'><i class='far fa-trash-alt'></i></button></td>";
            } else {
                echo "  <td align='center'><button class='btn btn-primary btn-sm' type='button' onclick='alterar(".$obj->id.",\"".$obj->numero."\")'><i class='fas fa-edit'></i></button>&nbsp;&nbsp;<button class='btn btn-secondary btn-sm' type='button' title='Possuí dependências!'><i class='far fa-trash-alt' alt='Possuí dependências!'></i></button></td>";                
            }
            echo "</tr>";
        }

