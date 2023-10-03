<?php

//require_once('./Model.php');
//require_once('./Perfil.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/model/Model.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/model/Perfil.php');

class ManterPerfil extends Model {

    function __construct() { //metodo construtor
        parent::__construct();
    }

    function listar() {
        $sql = "select p.id,p.nome, (select count(*) from usuario as u where u.idperfil=p.id) as dep FROM perfil as p order by p.id";
        
        $resultado = $this->db->Execute($sql);
        
        $array_dados = array();
        if($resultado){
        while ($registro = $resultado->FetchRow()) {
            $dados = new Perfil();
            $dados->excluir = true;
            if ($registro["dep"] > 0) {
                $dados->excluir = false;
            }
            $dados->id      = $registro["id"];
            $dados->nome    = utf8_encode($registro["nome"]);
            $array_dados[]  = $dados;
        }
    }
        return $array_dados;
    }
    function getPerfilPorId($id) {
        $sql = "select p.id,p.nome FROM perfil as p WHERE id=$id";
        //echo $sql;
        $resultado = $this->db->Execute($sql);
        $dados = new Perfil();
        while ($registro = $resultado->fetchRow()) {
            $dados->id          = $registro["id"];
            $dados->nome = utf8_encode($registro["nome"]);
        }
        return $dados;
    }
    function salvar(Perfil $dados) {
        $dados->nome = utf8_decode($dados->nome);
        $sql = "insert into perfil (nome) values ('" . $dados->nome . "')";
        if ($dados->id > 0) {
            $sql = "update perfil set nome='" . $dados->nome . "' where id=$dados->id";
            $resultado = $this->db->Execute($sql);
        } else {
            $resultado = $this->db->Execute($sql);
            $dados->id = $this->db->insert_Id();
        }
        return $resultado;
    }

    function excluir($id) {
        $sql = "delete from perfil where id=" . $id;
        $resultado = $this->db->Execute($sql);
        return $resultado;
    }

}

