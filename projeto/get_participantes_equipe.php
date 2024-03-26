<?php
  
        foreach ($equipe->participantes as $obj) {
            echo "<tr>";
            echo "  <td>".$obj->matricula."</td>";
            echo "  <td>".$obj->nome."</td>";
            if($usuario_logado->perfil < 2 || $usuario_logado->id == $equipe->criador){
                echo "  <td align='center'><button class='btn btn-danger btn-sm' type='button' onclick='excluir(".$obj->id.",\"".$obj->nome."\",".$equipe->id.")'><i class='far fa-trash-alt'></i></button></td>";
            } else {
                echo "  <td align='center'> - </td>";                
            }
            echo "</tr>";
        }

