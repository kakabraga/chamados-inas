<?php

require_once('Model.php');
require_once('dto/Agenda.php');

class ManterAgenda extends Model {

    function __construct() { //metodo construtor
        parent::__construct();
    }

    function listar($filtro = "") {
        $sql = "select a.id, a.titulo, a.descricao, a.cor, a.inicio, a.termino, a.id_usuario FROM agenda as a $filtro order by a.inicio";
        //echo $sql;
        $resultado = $this->db->Execute($sql);
        $array_dados = array();
        while ($registro = $resultado->fetchRow()) {
            $dados = new Agenda();
            $dados->excluir = true;
            $dados->id          = $registro["id"];
            $dados->titulo      = $registro["titulo"];
            $dados->descricao   = $registro["descricao"];
            $dados->cor         = $registro["cor"];
            $dados->inicio      = $registro["inicio"];
            $dados->termino     = $registro["termino"];
            $dados->usuario     = $registro["id_usuario"];
            $array_dados[]      = $dados;
        }
        return $array_dados;
    }
    function getAgendaPorId($id) {
        $sql = "select a.id, a.titulo, a.descricao, a.cor, a.inicio, a.termino, a.id_usuario FROM agenda as a WHERE a.id=$id";
        //echo $sql;
        $resultado = $this->db->Execute($sql);
        $dados = new Agenda();
        while ($registro = $resultado->fetchRow()) {
            $dados->id          = $registro["id"];
            $dados->titulo      = $registro["titulo"];
            $dados->descricao   = $registro["descricao"];
            $dados->cor         = $registro["cor"];
            $dados->inicio      = $registro["inicio"];
            $dados->termino     = $registro["termino"];
            $dados->usuario     = $registro["id_usuario"];
        }
        return $dados;
    }
    function salvar(Agenda $dados) {
        $sql = "insert into agenda (titulo, descricao, cor, inicio, termino, id_usuario) 
                values ('" . $dados->titulo . "','" . $dados->descricao . "','" . $dados->cor . "','" . $dados->inicio . "','" . $dados->termino . "','" . $dados->usuario . "')";
        if ($dados->id > 0) {
            $sql = "update agenda set titulo='" . $dados->titulo . "', descricao='" . $dados->descricao . 
                   "', cor='" . $dados->cor . "', inicio='" . $dados->inicio . "', termino='" . $dados->termino . "', id_usuario='" . $dados->usuario . "' where id=$dados->id";
            $resultado = $this->db->Execute($sql);
        } else {
            $resultado = $this->db->Execute($sql);
            $dados->id = $this->db->insert_Id();
        }
        return $resultado;
    }

    function excluir($id) {
        $sql = "delete from agenda where id=" . $id;
        $resultado = $this->db->Execute($sql);
        return $resultado;
    }

}

