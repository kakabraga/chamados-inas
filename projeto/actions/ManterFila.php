<?php

require_once('Model.php');
//require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/samj/dto/Fila.php');
require_once('dto/Fila.php');

class ManterFila extends Model {

    function __construct() { //metodo construtor
        parent::__construct();
    }

    function listar() {
        $sql = "select f.id, f.nome, f.preferencial, f.entrada, f.qtd_chamadas, f.atendido, f.id_servico, f.chamar, 
        f.ultima_chamada, f.id_guiche_chamador, (select count(*) from atendimento as a where a.id_fila=f.id) as dep FROM fila as f order by f.id";
        //echo $sql;
        $resultado = $this->db->Execute($sql);
        $array_dados = array();
        while ($registro = $resultado->fetchRow()) {
            $dados = new Fila();
            $dados->excluir = true;
            if ($registro["dep"] > 0) {
                $dados->excluir = false;
            }
            $dados->id              = $registro["id"];
            $dados->numero          = $registro["nome"];
            $dados->preferencial    = $registro["preferencial"];
            $dados->entrada         = $registro["entrada"];
            $dados->qtd_chamadas    = $registro["qtd_chamadas"];
            $dados->atendido        = $registro["atendido"];
            $dados->servico         = $registro["id_servico"];
            $dados->chamar          = $registro["chamar"];
            $dados->ultima_chamada  = $registro["ultima_chamada"];
            $dados->guiche_chamador  = $registro["id_guiche_chamador"];
            $array_dados[]      = $dados;
        }
        return $array_dados;
    }

    function getFila() {
        $sql = "SELECT f.id, f.nome, f.preferencial, f.entrada, f.qtd_chamadas, f.atendido, f.id_servico, f.chamar, f.ultima_chamada, f.id_guiche_chamador 
        FROM fila as f 
        WHERE f.atendido is NULL order by  f.preferencial DESC,  f.entrada";
        //echo $sql;
        $resultado = $this->db->Execute($sql);
        $array_dados = array();
        while ($registro = $resultado->fetchRow()) {
            $dados = new Fila();
            $dados->id              = $registro["id"];
            $dados->nome            = $registro["nome"];
            $dados->preferencial    = $registro["preferencial"];
            $dados->entrada         = $registro["entrada"];
            $dados->qtd_chamadas    = $registro["qtd_chamadas"];
            $dados->atendido        = $registro["atendido"];
            $dados->servico         = $registro["id_servico"];
            $dados->chamar          = $registro["chamar"];
            $dados->ultima_chamada  = $registro["ultima_chamada"];
            $dados->guiche_chamador = $registro["id_guiche_chamador"];
            $array_dados[]          = $dados;
        }
        return $array_dados;
    }
    function getFilaPorId($id) {
        $sql = "select f.id, f.nome, f.preferencial, f.entrada, f.qtd_chamadas, f.atendido, f.id_servico, f.chamar, 
        f.ultima_chamada, f.id_guiche_chamador FROM fila as f WHERE id=$id";
        //echo $sql;
        $resultado = $this->db->Execute($sql);
        $dados = new Fila();
        while ($registro = $resultado->fetchRow()) {
            $dados->id              = $registro["id"];
            $dados->numero          = $registro["nome"];
            $dados->preferencial    = $registro["preferencial"];
            $dados->entrada         = $registro["entrada"];
            $dados->qtd_chamadas    = $registro["qtd_chamadas"];
            $dados->atendido        = $registro["atendido"];
            $dados->servico         = $registro["id_servico"];
            $dados->chamar          = $registro["chamar"];
            $dados->ultima_chamada  = $registro["ultima_chamada"];
            $dados->guiche_chamador = $registro["id_guiche_chamador"];
        }
        return $dados;
    }
    function salvar(Fila $dados) {
        $sql = "insert into fila (nome, preferencial, entrada, qtd_chamadas, atendido, id_servico, chamar, ultima_chamada) 
        values ('" . $dados->nome . "','" . $dados->preferencial . "',now(),0,NULL,'" . $dados->servico . "',0,NULL)";
        if ($dados->id > 0) {
            $sql = "update fila set nome='" . $dados->nome . "',preferencial='" . $dados->preferencial . "',id_servico='" . $dados->servico . "' where id=$dados->id";
            $resultado = $this->db->Execute($sql);
        } else {
            $resultado = $this->db->Execute($sql);
            $dados->id = $this->db->insert_Id();
        }
        return $resultado;
    }
    function chamar($id,$id_guiche) {
        $sql = "update fila set chamar=1,  qtd_chamadas=(qtd_chamadas+1), ultima_chamada = now(), id_guiche_chamador=$id_guiche where id=id";
        $resultado = $this->db->Execute($sql);
        return $resultado;
    }
    function chamouPainel($id) {
        $sql = "update fila set chamar=0 where id=id";
        $resultado = $this->db->Execute($sql);
        return $resultado;
    }
    function getChamadosPainel() {
        $sql = "SELECT f.id, f.nome, f.preferencial, f.entrada, f.qtd_chamadas, f.atendido, f.id_servico, f.chamar, f.ultima_chamada, f.id_guiche_chamador 
        FROM fila as f 
        WHERE f.ultima_chamada is not NULL order by  f.ultima_chamada LIMIT 4";
        //echo $sql;
        $resultado = $this->db->Execute($sql);
        $array_dados = array();
        while ($registro = $resultado->fetchRow()) {
            $dados = new Fila();
            $dados->id              = $registro["id"];
            $dados->nome            = $registro["nome"];
            $dados->preferencial    = $registro["preferencial"];
            $dados->entrada         = $registro["entrada"];
            $dados->qtd_chamadas    = $registro["qtd_chamadas"];
            $dados->atendido        = $registro["atendido"];
            $dados->servico         = $registro["id_servico"];
            $dados->chamar          = $registro["chamar"];
            $dados->ultima_chamada  = $registro["ultima_chamada"];
            $dados->guiche_chamador = $registro["id_guiche_chamador"];
            $array_dados[]          = $dados;
        }
        return $array_dados;
    }
    function excluir($id) {
        $sql = "delete from fila where id=" . $id;
        $resultado = $this->db->Execute($sql);
        return $resultado;
    }

}

