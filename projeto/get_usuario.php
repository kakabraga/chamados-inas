<?php
	include_once('actions/ManterUsuario.php'); 
	include_once('actions/ManterPerfil.php'); 
	include_once('actions/ManterEquipe.php'); 
    include_once('actions/ManterSetor.php'); 
        
	$manterUsuario = new ManterUsuario();
	$manterPerfil = new ManterPerfil();
    $manterEquipe = new ManterEquipe();
    $manterSetor = new ManterSetor();
        
	$lista = $manterUsuario->listar();
        
        foreach ($lista as $obj) {
            echo "<tr>";
            echo "  <td>".$obj->id."</td>";
            echo "  <td>".$obj->matricula."</td>";
            echo "  <td>".$obj->nome ."</td>";
            $txt_equipe = "";
            if(isset($obj->equipe) && $obj->equipe!=''){
                $txt_equipe = $manterEquipe->getEquipePorId($obj->equipe)->equipe;
            }
            echo "  <td>".$txt_equipe."</td>";
            echo "  <td>".$manterSetor->getSetorPorId($obj->setor)->sigla."</td>";
            echo "  <td>".$manterPerfil->getPerfilPorId($obj->perfil)->perfil."</td>";
            echo "  <td>".($obj->ativo > 0 ? 'Sim':'Não')."</td>";
            if($usuario_logado->perfil < $obj->perfil || $usuario_logado->id == $obj->id){
            if($obj->excluir){
                echo '  <td align="center" valign="bottom" class="align-middle nowrap"><button class="btn btn-primary btn-sm" type="button" onclick="alterar(\''.$obj->id.'\',\'' .$obj->login.'\',\''.addslashes($obj->nome).'\',\''.$obj->matricula.'\',\''.$obj->email.'\',\''.$obj->nascimento.'\',\''.$obj->whatsapp.'\',\''.$obj->linkedin.'\',\''.$obj->ativo.'\',\''.$obj->equipe.'\',\''.$obj->setor.'\',\''.$obj->perfil.'\')"><i class="fas fa-edit"></i></button>&nbsp;&nbsp;<button class="btn btn-danger btn-sm" type="button" onclick="excluir('.$obj->id.',\''.$obj->nome.'\')"><i class="far fa-trash-alt"></i></button>>&nbsp;&nbsp;<a href="gerenciar_acesso.php?id='.$obj->id.'" class="btn btn-warning btn-sm" type="button"><i class="fa fa-unlock"></i></button></td>';
            } else {
                echo '  <td align="center" valign="bottom" class="align-middle nowrap"><button class="btn btn-primary btn-sm" type="button" onclick="alterar(\''.$obj->id.'\',\'' .$obj->login.'\',\''.addslashes($obj->nome).'\',\''.$obj->matricula.'\',\''.$obj->email.'\',\''.$obj->nascimento.'\',\''.$obj->whatsapp.'\',\''.$obj->linkedin.'\',\''.$obj->ativo.'\',\''.$obj->equipe.'\',\''.$obj->setor.'\',\''.$obj->perfil.'\')"><i class="fas fa-edit"></i></button>&nbsp;&nbsp;<button class="btn btn-secondary btn-sm" type="button"><i class="far fa-trash-alt"></i></button>&nbsp;&nbsp;<a href="gerenciar_acesso.php?id='.$obj->id.'" class="btn btn-warning btn-sm" type="button"><i class="fa fa-unlock"></i></butaton></td>';
            }
            }  else {
                echo "  <td align='center'> - </td>";
            }

            echo "</tr>";
        }

