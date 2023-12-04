<?php
	include_once('actions/ManterGuiche.php'); 
    include_once('actions/ManterUsuario.php');
	
	$manterGuiche = new ManterGuiche();
    $manterUsuario = new ManterUsuario();
	
	$lista = $manterGuiche->listar();
        
        foreach ($lista as $obj) {
            echo "<tr>";
            echo "  <td>".$obj->id."</td>";
            echo "  <td>".$obj->numero."</td>";
            echo "  <td>".$manterUsuario->getUsuarioPorId($obj->usuario)->nome."</td>";
            if($obj->excluir){
                echo "  <td align='center'><button class='btn btn-primary btn-sm' type='button' onclick='alterar(".$obj->id.",\"".$obj->numero."\",\"".$obj->usuario."\")'><i class='fas fa-edit'></i></button>&nbsp;&nbsp;<button class='btn btn-danger btn-sm' type='button' onclick='excluir(".$obj->id.",\"".$obj->numero."\")'><i class='far fa-trash-alt'></i></button></td>";
            } else {
                echo "  <td align='center'><button class='btn btn-primary btn-sm' type='button' onclick='alterar(".$obj->id.",\"".$obj->numero."\",\"".$obj->usuario."\")'><i class='fas fa-edit'></i></button>&nbsp;&nbsp;<button class='btn btn-secondary btn-sm' type='button' title='Possuí dependências!'><i class='far fa-trash-alt' alt='Possuí dependências!'></i></button></td>";                
            }
            echo "</tr>";
        }

