<?php
	include_once('actions/ManterPergunta.php'); 
	
	$manterPergunta = new ManterPergunta();
	
	$lista = $manterPergunta->listar();
        
        foreach ($lista as $obj) {
            echo "<tr>";
            echo "  <td>".$obj->id."</td>";
            echo "  <td>".$obj->descricao."</td>";
            $txt_status = "<img src='./img/nao_visivel.svg' width='30'/>";
            if($obj->status == 1){
                $txt_status = "<img src='./img/visivel.svg' width='30'/>";
            }
            echo "  <td>".$txt_status."</td>";
            if($obj->excluir){
                echo "  <td align='center'><button class='btn btn-primary btn-sm' type='button' onclick='alterar(".$obj->id.",\"".$obj->descricao."\")'><i class='fas fa-edit'></i></button>&nbsp;&nbsp;<button class='btn btn-danger btn-sm' type='button' onclick='excluir(".$obj->id.",\"".$obj->descricao."\")'><i class='far fa-trash-alt'></i></button></td>";
            } else {
                echo "  <td align='center'><button class='btn btn-primary btn-sm' type='button' onclick='alterar(".$obj->id.",\"".$obj->descricao."\")'><i class='fas fa-edit'></i></button>&nbsp;&nbsp;<button class='btn btn-secondary btn-sm' type='button' title='Possuí dependências!'><i class='far fa-trash-alt' alt='Possuí dependências!'></i></button></td>";                
            }
            echo "</tr>";
        }

