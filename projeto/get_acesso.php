<?php
	include_once('actions/ManterUsuario.php'); 
	
	$manterUsuario = new ManterUsuario();
	
	$lista = $manterUsuario->getAcessosUsuario($id_usuario);
        
        foreach ($lista as $obj) {
            echo "<tr>";
            echo "  <td>".$obj->id_modulo."</td>";
            echo "  <td>".$obj->modulo."</td>";
            echo "  <td>".$obj->perfil."</td>";
            if($obj->excluir){
                echo "  <td align='center'><button class='btn btn-danger btn-sm' type='button' onclick='excluir(".$obj->id.",\"".$obj->modulo."\",".$id_usuario.")'><i class='far fa-trash-alt'></i></button></td>";
            } else {
                echo "  <td align='center'> - </td>";                
            }
            echo "</tr>";
        }

