<?php

require_once('Model.php');
require_once('dto/Usuario.php');

class ManterUsuario extends Model {

    function __construct() { //metodo construtor
        parent::__construct();
    }

    function listar() {
        $sql = "select u.id,u.nome,u.login,u.matricula,u.email,u.nascimento, u.whatsapp, u.linkedin,u.ativo,u.id_equipe,u.id_setor,u.id_perfil,(select count(*) from tarefa as t where t.id_criador=u.id OR t.id_responsavel=u.id) as dep FROM usuario as u order by u.nome";
        $resultado = $this->db->Execute($sql);
        $array_dados = array();
        while ($registro = $resultado->fetchRow()) {
            $dados = new Usuario();
            $dados->excluir = true;
            if ($registro["dep"] > 0) {
                $dados->excluir = false;
            }
            $dados->id = $registro["id"];
            $dados->nome = $registro["nome"];
            $dados->login = $registro["login"];
            $dados->matricula = $registro["matricula"];
            $dados->email = $registro["email"];
            $dados->nascimento = $registro["nascimento"];
            $dados->whatsapp = $registro["whatsapp"];
            $dados->linkedin = $registro["linkedin"];
            $dados->ativo = $registro["ativo"];
            $dados->equipe = $registro["id_equipe"];
            $dados->setor = $registro["id_setor"];
            $dados->perfil = $registro["id_perfil"];
            $array_dados[] = $dados;
        }
        return $array_dados;
    }

    function getUsuarioPorId($id) {
        $sql = "select u.id,u.nome,u.login,u.matricula,u.email,u.nascimento, u.whatsapp, u.linkedin,u.ativo,u.id_equipe,u.id_setor,u.id_perfil FROM usuario as u WHERE id=$id";
        //echo $sql;
        $resultado = $this->db->Execute($sql);
        $dados = new Usuario();
        while ($registro = $resultado->fetchRow()) {
            $dados->id = $registro["id"];
            $dados->nome = $registro["nome"];
            $dados->login = $registro["login"];
            $dados->matricula = $registro["matricula"];
            $dados->email = $registro["email"];
            $dados->nascimento = $registro["nascimento"];
            $dados->whatsapp = $registro["whatsapp"];
            $dados->linkedin = $registro["linkedin"];
            $dados->ativo = $registro["ativo"];
            $dados->equipe = $registro["id_equipe"];
            $dados->setor = $registro["id_setor"];
            $dados->perfil = $registro["id_perfil"];
        }
        return $dados;
    }
    function getUsuarioPorLogin($login) {
        $sql = "select u.id,u.nome,u.login,u.matricula,u.email,u.nascimento, u.whatsapp, u.linkedin,u.ativo,u.id_equipe,u.id_setor,u.id_perfil FROM usuario as u WHERE login='$login'";
        //echo $sql;
        $resultado = $this->db->Execute($sql);
        $dados = new Usuario();
        while ($registro = $resultado->fetchRow()) {
            $dados->id = $registro["id"];
            $dados->nome = $registro["nome"];
            $dados->login = $registro["login"];
            $dados->matricula = $registro["matricula"];
            $dados->email = $registro["email"];
            $dados->nascimento = date('Y-m-d', $registro["nascimento"]);
            $dados->whatsapp = $registro["whatsapp"];
            $dados->linkedin = $registro["linkedin"];
            $dados->ativo = $registro["ativo"];
            $dados->equipe = $registro["id_equipe"];
            $dados->setor = $registro["id_setor"];
            $dados->perfil = $registro["id_perfil"];
        }
        return $dados;
    }
    function salvar(Usuario $dados) {
        $sql = "insert into usuario (nome, login, matricula, email, u.nascimento, u.whatsapp, u.linkedin, ativo, id_equipe, id_setor, id_perfil) values ('" . $dados->nome . "','" . $dados->login . "','" . $dados->matricula . "','" . $dados->email . "','" . $dados->nascimento . "','" . $dados->whatsapp . "','" . $dados->linkedin . "','" . $dados->ativo . "','" . $dados->equipe . "','" . $dados->setor . "','" . $dados->perfil . "')";
//        echo $sql . "<BR/>";
//        exit;
        if ($dados->id > 0) {
            $sql = "update usuario set nome='" . $dados->nome . "',login='" . $dados->login . "',matricula='" . $dados->matricula . "',email='" . $dados->email . "',nascimento='" . $dados->nascimento . "',whatsapp='" . $dados->whatsapp . "',linkedin='" . $dados->linkedin . "',ativo='" . $dados->ativo . "',id_equipe='" . $dados->equipe . "',id_setor='" . $dados->setor . "',id_perfil='" . $dados->perfil . "' where id=$dados->id";
            $resultado = $this->db->Execute($sql);
        } else {
            $resultado = $this->db->Execute($sql);
            $dados->id = $this->db->insert_Id();
        }
        //echo $sql . "<BR/>";
        return $resultado;
    }

    function excluir($id) {
        $sql = "delete from usuario where id=" . $id;
        $resultado = $this->db->Execute($sql);
        return $resultado;
    }
    function getEditoresPorTarefa($id_tarefa) {
        $sql = "select u.id,u.nome,u.login,u.matricula,u.email,u.nascimento, u.whatsapp, u.linkedin,u.ativo,u.id_equipe,u.id_setor,u.id_perfil FROM usuario as u, editor as e WHERE e.id_usuario=u.id AND e.id_tarefa=".$id_tarefa." order by u.nome";
        $resultado = $this->db->Execute($sql);
        $array_dados = array();
        while ($registro = $resultado->fetchRow()) {
            $dados = new Usuario();
            $dados->excluir = true;
            if ($registro["dep"] > 0) {
                $dados->excluir = false;
            }
            $dados->id = $registro["id"];
            $dados->nome = $registro["nome"];
            $dados->login = $registro["login"];
            $dados->matricula = $registro["matricula"];
            $dados->email = $registro["email"];
            $dados->nascimento = date('Y-m-d', $registro["nascimento"]);
            $dados->whatsapp = $registro["whatsapp"];
            $dados->linkedin = $registro["linkedin"];
            $dados->ativo = $registro["ativo"];
            $dados->equipe = $registro["id_equipe"];
            $dados->setor = $registro["id_setor"];
            $dados->perfil = $registro["id_perfil"];
            $array_dados[] = $dados;
        }
        return $array_dados;
    }
    function getNaoEditoresPorTarefa($id_tarefa) {
        $sql = "select u.id,u.nome,u.login,u.matricula,u.email,u.nascimento, u.whatsapp, u.linkedin,u.ativo,u.id_equipe,u.id_setor,u.id_perfil FROM usuario as u WHERE u.id NOT IN(SELECT id_usuario FROM editor WHERE id_tarefa=".$id_tarefa.") order by u.nome";
        //echo $sql;
        $resultado = $this->db->Execute($sql);
        $array_dados = array();
        while ($registro = $resultado->fetchRow()) {
            $dados = new Usuario();
            $dados->excluir = true;
            $dados->id = $registro["id"];
            $dados->nome = $registro["nome"];
            $dados->login = $registro["login"];
            $dados->matricula = $registro["matricula"];
            $dados->email = $registro["email"];
            $dados->nascimento = date('Y-m-d', $registro["nascimento"]);
            $dados->whatsapp = $registro["whatsapp"];
            $dados->linkedin = $registro["linkedin"];
            $dados->ativo = $registro["ativo"];
            $dados->equipe = $registro["id_equipe"];
            $dados->setor = $registro["id_setor"];
            $dados->perfil = $registro["id_perfil"];
            $array_dados[] = $dados;
        }
        return $array_dados;
    }
    function getUsuariosEquipePorTarefa($id_tarefa) {
        $sql = "select u.id,u.nome,u.login,u.matricula,u.email,u.nascimento, u.whatsapp, u.linkedin,u.ativo,u.id_equipe,u.id_setor,u.id_perfil FROM usuario as u, tarefa as t WHERE t.id=$id_tarefa AND u.id_equipe=t.id_equipe order by u.nome";
        //echo $sql;
        $resultado = $this->db->Execute($sql);
        $array_dados = array();
        while ($registro = $resultado->fetchRow()) {
            $dados = new Usuario();
            $dados->excluir = true;
            if ($registro["dep"] > 0) {
                $dados->excluir = false;
            }
            $dados->id = $registro["id"];
            $dados->nome = $registro["nome"];
            $dados->login = $registro["login"];
            $dados->matricula = $registro["matricula"];
            $dados->email = $registro["email"];
            $dados->nascimento = date('Y-m-d', $registro["nascimento"]);
            $dados->whatsapp = $registro["whatsapp"];
            $dados->linkedin = $registro["linkedin"];
            $dados->ativo = $registro["ativo"];
            $dados->equipe = $registro["id_equipe"];
            $dados->setor = $registro["id_setor"];
            $dados->perfil = $registro["id_perfil"];
            $array_dados[] = $dados;
        }
        return $array_dados;
    }
    function getUsuariosPorEquipe($id_equipe) {
        $sql = "select u.id,u.nome,u.login,u.matricula,u.email,u.nascimento, u.whatsapp, u.linkedin, u.ativo,u.id_equipe,u.id_setor,u.id_perfil FROM usuario as u WHERE u.id_equipe=$id_equipe order by u.nome";
        //echo $sql;
        $resultado = $this->db->Execute($sql);
        $array_dados = array();
        while ($registro = $resultado->fetchRow()) {
            $dados = new Usuario();
            $dados->excluir = true;
            if ($registro["dep"] > 0) {
                $dados->excluir = false;
            }
            $dados->id = $registro["id"];
            $dados->nome = $registro["nome"];
            $dados->login = $registro["login"];
            $dados->matricula = $registro["matricula"];
            $dados->email = $registro["email"];
            $dados->nascimento = date('Y-m-d', $registro["nascimento"]);
            $dados->whatsapp = $registro["whatsapp"];
            $dados->linkedin = $registro["linkedin"];
            $dados->ativo = $registro["ativo"];
            $dados->equipe = $registro["id_equipe"];
            $dados->setor = $registro["id_setor"];
            $dados->perfil = $registro["id_perfil"];
            $array_dados[] = $dados;
        }
        return $array_dados;
    }
    function salvarEditor($id,$tarefa,$op="add"){
        $sql = "insert into editor (id_usuario, id_tarefa) values ('" . $id . "','" . $tarefa . "')";
        //echo $sql . "<BR/>";
        //exit;
        if ($op != "add") {
            $sql = "DELETE FROM editor WHERE id_usuario=" . $id . " AND id_tarefa=" . $tarefa ;
            $resultado = $this->db->Execute($sql);
        } else {
            $resultado = $this->db->Execute($sql);
            $dados->id = $this->db->insert_Id();
        }
        //echo $sql . "<BR/>";
        //exit;
        return $resultado;
    }
}
