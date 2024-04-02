<?php
	include_once('actions/ManterUsuario.php'); 
	include_once('actions/ManterPerfil.php');  
    include_once('actions/ManterSetor.php'); 
        
	$manterUsuario = new ManterUsuario();
	$manterPerfil = new ManterPerfil();
    $manterSetor = new ManterSetor();
        
	$lista = $manterUsuario->listar();
        
        foreach ($lista as $obj) {
            echo "<tr>";
            echo "  <td>".$obj->id."</td>";
            echo "  <td>".$obj->matricula."</td>";
            echo "  <td>".$obj->nome ."</td>";
            echo "  <td>".$manterSetor->getSetorPorId($obj->setor)->sigla."</td>";
            echo "  <td>".($obj->ativo > 0 ? 'Sim':'Não')."</td>";
            if($usuario_logado->perfil <= 2 || $usuario_logado->id == $obj->id){
                if($obj->excluir){
                    echo '  <td align="center" valign="bottom" class="align-middle nowrap"><button class="btn btn-primary btn-sm" type="button" onclick="alterar(\''.$obj->id.'\',\'' .$obj->login.'\',\''.addslashes($obj->nome).'\',\''.$obj->matricula.'\',\''.$obj->cargo.'\',\''.$obj->email.'\',\''.$obj->nascimento.'\',\''.$obj->whatsapp.'\',\''.$obj->linkedin.'\',\''.$obj->ativo.'\',\''.$obj->setor.'\',\''.$obj->perfil.'\')"><i class="fas fa-edit"></i></button>&nbsp;&nbsp;<button class="btn btn-danger btn-sm" type="button" onclick="excluir('.$obj->id.',\''.$obj->nome.'\')"><i class="far fa-trash-alt"></i></button>&nbsp;&nbsp;<a href="gerenciar_acessos.php?id='.$obj->id.'" title="Gerenciar acessos" class="btn btn-warning btn-sm" type="button"><i class="fa fa-unlock"></i></a></td>';
                } else {
                    echo '  <td align="center" valign="bottom" class="align-middle nowrap"><button class="btn btn-primary btn-sm" type="button" onclick="alterar(\''.$obj->id.'\',\'' .$obj->login.'\',\''.addslashes($obj->nome).'\',\''.$obj->matricula.'\',\''.$obj->cargo.'\',\''.$obj->email.'\',\''.$obj->nascimento.'\',\''.$obj->whatsapp.'\',\''.$obj->linkedin.'\',\''.$obj->ativo.'\',\''.$obj->setor.'\',\''.$obj->perfil.'\')"><i class="fas fa-edit"></i></button>&nbsp;&nbsp;<button class="btn btn-secondary btn-sm" type="button"><i class="far fa-trash-alt"></i></button>&nbsp;&nbsp;<a href="gerenciar_acessos.php?id='.$obj->id.'"  title="Gerenciar acessos" class="btn btn-warning btn-sm" type="button"><i class="fa fa-unlock"></i></a></td>';
                }
            }  else {
                echo "  <td align='center'> - </td>";
            }

            echo "</tr>";
        }

