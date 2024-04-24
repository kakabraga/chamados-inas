<?php
  
        foreach ($listaVisitantes as $obj) {
            echo "<tr>";
            echo "  <td>".$obj->matricula."</td>";
            echo "  <td>".$obj->nome."</td>";
            if($usuario_logado->perfil < 2 || $usuario_logado->id == $usuario->id){
                echo "  <td align='center'><button class='btn btn-danger btn-sm' type='button' onclick='excluir(".$obj->id_visitante.",\"".$obj->editar."\",".$obj->id_usuario.")'><i class='far fa-trash-alt'></i></button></td>";
            } else {
                echo "  <td align='center'> - </td>";                
            }
            echo "</tr>";
        }

