<?php
    date_default_timezone_set('America/Sao_Paulo');

	include_once('actions/ManterRecepcao.php'); 
	
	$manterRecepcao = new ManterRecepcao();
	
	$lista = $manterRecepcao->listar();
        
        foreach ($lista as $obj) {
            echo "<tr>";
            echo "  <td>".$obj->id."</td>";
            echo "  <td>".$obj->visitante."</td>";
            echo "  <td>".$obj->empresa."</td>";
            echo "  <td>".$obj->setor."</td>";
            echo "  <td>".$obj->horario."</td>";
            $hoje = date('d/m/Y');
            $data_cadastro = date('d/m/Y', strtotime($obj->cadastro));
            if($hoje == $data_cadastro || $usuario_logado->perfil <=2){
                if($obj->excluir){
                    echo "  <td align='center'><button class='btn btn-primary btn-sm' type='button' onclick='alterar(".$obj->id.",\"".$obj->visitante."\",\"".$obj->empresa."\",\"".$obj->horario."\",\"".$obj->setor."\",\"".$obj->recebido_por."\",\"".$obj->assunto."\")'><i class='fas fa-edit'></i></button>&nbsp;&nbsp;<button class='btn btn-danger btn-sm' type='button' onclick='excluir(".$obj->id.",\"".$obj->visitante."\")'><i class='far fa-trash-alt'></i></button></td>";
                } else {
                    echo "  <td align='center'><button class='btn btn-primary btn-sm' type='button' onclick='alterar(".$obj->id.",\"".$obj->visitante."\",\"".$obj->empresa."\",\"".$obj->horario."\",\"".$obj->setor."\",\"".$obj->recebido_por."\",\"".$obj->assunto."\")'><i class='fas fa-edit'></i></button>&nbsp;&nbsp;<button class='btn btn-secondary btn-sm' type='button' title='Possuí dependências!'><i class='far fa-trash-alt' alt='Possuí dependências!'></i></button></td>";                
                }
            } else {
                echo "  <td align='center'> - </td>";
            }
            echo "</tr>";
        }

