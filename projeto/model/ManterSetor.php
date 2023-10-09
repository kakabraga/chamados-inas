<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/model/Model.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/model/Setor.php');

class ManterSetor extends Model {

    function __construct() { //metodo construtor
        parent::__construct();
    }

    function listar() {
        $sql = "select s.id,s.sigla,s.descricao, (select count(*) from usuario as u where u.idsetor=s.id) as dep FROM setor as s order by s.id";
        
        $resultado = $this->db->Execute($sql);
        //var_dump($resultado);
        $array_dados = array();
        if($resultado){
            while ($registro = $resultado->FetchRow()) {
                $dados = new Setor();
                $dados->excluir = true;
                if ($registro["dep"] > 0) {
                    $dados->excluir = false;
                }
                $dados->id          = $registro["id"];
                $dados->sigla       = utf8_encode($registro["sigla"]);
                $dados->descricao   = utf8_encode($registro["descricao"]);
                $array_dados[]      = $dados;
            }
        }
        return $array_dados;
    }
    function getSetorPorId($id) {
        $sql = "select s.id,s.sigla,s.descricao FROM setor as s WHERE id=$id";
        //echo $sql;
        $resultado = $this->db->Execute($sql);
        $dados = new Setor();
        while ($registro = $resultado->fetchRow()) {
            $dados->id          = $registro["id"];
            $dados->sigla       = utf8_encode($registro["sigla"]);
            $dados->descricao   = utf8_encode($registro["descricao"]);
        }
        return $dados;
    }
    function salvar(Setor $dados) {
        $dados->sigla = utf8_decode($dados->sigla);
        $dados->descricao = utf8_decode($dados->descricao);
        $sql = "insert into setor (sigla,descricao) values ('" . $dados->sigla . "','" . $dados->descricao . "')";
        if ($dados->id > 0) {
            $sql = "update setor set sigla='" . $dados->sigla . "', descricao='" . $dados->descricao . "' where id=$dados->id";
            $resultado = $this->db->Execute($sql);
        } else {
            $resultado = $this->db->Execute($sql);
            $dados->id = $this->db->insert_Id();
        }
        return $resultado;
    }

    function excluir($id) {
        $sql = "delete from setor where id=" . $id;
        $resultado = $this->db->Execute($sql);
        return $resultado;
    }

}

