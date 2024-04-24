<?php
  
        foreach ($listaVisitantes as $obj) {
            echo "<tr>";
            echo "  <td>".$obj->matricula."</td>";
            echo "  <td>".$obj->nome."</td>";
            $txt_editor = "Não";
            if($obj->editor == 1){
                $txt_editor = "Sim";
            }
            echo "  <td>".$txt_editor."</td>";
            if($usuario_logado->perfil < 2 || $usuario_logado->id == $usuario->id){
                echo "  <td align='center'><button class='btn btn-danger btn-sm' type='button' onclick='excluir(".$obj->id.",\"".$obj->nome."\",".$usuario->id.")'><i class='far fa-trash-alt'></i></button></td>";
            } else {
                echo "  <td align='center'> - </td>";                
            }
            echo "</tr>";
        }

