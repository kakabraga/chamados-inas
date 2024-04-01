<?php

require_once('Model.php');
require_once('dto/Processo.php');

class ManterProcesso extends Model {

    function __construct() { //metodo construtor
        parent::__construct();
    }

    function listar() {
        $sql = "SELECT id, numero, sei, autuacao, cpf, beneficiario, senha, valor_guia, valor_causa, deposito_judicial, reembolso, custas, 
        honorarios, multa, danos_morais, observacao, id_assunto, id_situacao_processual, id_liminar, id_usuario, atualizacao FROM processo ORDER BY autuacao";
        //echo $sql;
        $resultado = $this->db->Execute($sql);
        $array_dados = array();
        while ($registro = $resultado->fetchRow()) {
            $dados = new Processo();
            $dados->excluir = true;
            $dados->id                  = $registro["id"];
            $dados->numero              = $registro["numero"];
            $dados->sei                 = $registro["sei"];
            $dados->autuacao            = $registro["autuacao"];
            $dados->cpf                 = $registro["cpf"];
            $dados->beneficiario        = $registro["beneficiario"];
            $dados->senha               = $registro["senha"];
            $dados->valor_guia          = $registro["valor_guia"];
            $dados->valor_causa         = $registro["valor_causa"];
            $dados->deposito_judicial   = $registro["deposito_judicial"];
            $dados->reembolso           = $registro["reembolso"];
            $dados->custas              = $registro["custas"];
            $dados->honorarios          = $registro["honorarios"];
            $dados->multa               = $registro["multa"];
            $dados->danos_morais        = $registro["danos_morais"];
            $dados->observacao          = $registro["observacao"];
            $dados->assunto             = $registro["id_assunto"];
            $dados->situacao_processual = $registro["id_situacao_processual"];
            $dados->liminar             = $registro["id_liminar"];
            $dados->usuario             = $registro["id_usuario"];
            $dados->atualizacao         = $registro["atualizacao"];

            $array_dados[]      = $dados;
        }
        return $array_dados;
    }
    function getProcessoPorId($id) {
        $sql = "SELECT id, numero, sei, autuacao, cpf, beneficiario, senha, valor_guia, valor_causa, deposito_judicial, reembolso, custas, 
        honorarios, multa, danos_morais, observacao, id_assunto, id_situacao_processual, id_liminar, id_usuario, atualizacao FROM processo WHERE id=$id";
        //echo $sql;
        $resultado = $this->db->Execute($sql);
        $dados = new Processo();
        while ($registro = $resultado->fetchRow()) {
            $dados->id                  = $registro["id"];
            $dados->numero              = $registro["numero"];
            $dados->sei                 = $registro["sei"];
            $dados->autuacao            = $registro["autuacao"];
            $dados->cpf                 = $registro["cpf"];
            $dados->beneficiario        = $registro["beneficiario"];
            $dados->senha               = $registro["senha"];
            $dados->valor_guia          = $registro["valor_guia"];
            $dados->valor_causa         = $registro["valor_causa"];
            $dados->deposito_judicial   = $registro["deposito_judicial"];
            $dados->reembolso           = $registro["reembolso"];
            $dados->custas              = $registro["custas"];
            $dados->honorarios          = $registro["honorarios"];
            $dados->multa               = $registro["multa"];
            $dados->danos_morais        = $registro["danos_morais"];
            $dados->observacao          = $registro["observacao"];
            $dados->assunto             = $registro["id_assunto"];
            $dados->situacao_processual = $registro["id_situacao_processual"];
            $dados->liminar             = $registro["id_liminar"];
            $dados->usuario             = $registro["id_usuario"];
            $dados->atualizacao         = $registro["atualizacao"];
        }
        return $dados;
    }
    function salvar(Processo $dados) {
        $sql = "insert into processo (numero, sei, autuacao, cpf, beneficiario, senha, valor_guia, valor_causa, deposito_judicial, reembolso, custas, 
        honorarios, multa, danos_morais, observacao, id_assunto, id_situacao_processual, id_liminar, id_usuario, atualizacao) 
        values ('" . $dados->numero . "','" . $dados->sei . "','" . $dados->autuacao . "','" . $dados->cpf . "','" . $dados->beneficiario . "',
        '" . $dados->senha . "','" . $dados->valor_guia . "','" . $dados->valor_causa . "','" . $dados->deposito_judicial . "','" . $dados->reembolso . "',
        '" . $dados->custas . "','" . $dados->honorarios . "','" . $dados->multa . "','" . $dados->danos_morais . "','" . $dados->observacao . "','" . $dados->assunto . "',
        '" . $dados->situacao_processual . "','" . $dados->liminar . "','" . $dados->usuario . "',now())";
        if ($dados->id > 0) {
            $sql = "update processo set numero='" . $dados->numero . "', sei='" . $dados->sei . "', autuacao='" . $dados->autuacao . "',
            cpf='" . $dados->cpf . "', beneficiario='" . $dados->beneficiario . "', senha='" . $dados->senha . "', valor_guia='" . $dados->valor_guia . "', 
            valor_causa='" . $dados->valor_causa . "', deposito_judicial='" . $dados->deposito_judicial . "', reembolso='" . $dados->reembolso . "', 
            custas='" . $dados->custas . "', honorarios='" . $dados->honorarios . "', multa='" . $dados->multa . "', danos_morais='" . $dados->danos_morais . "', 
            observacao='" . $dados->observacao . "', id_assunto='" . $dados->assunto . "', id_situacao_processual='" . $dados->situacao_processual . "', 
            id_liminar='" . $dados->liminar . "', id_usuario='" . $dados->usuario . "', atualizacao=now() where id=$dados->id";
            $resultado = $this->db->Execute($sql);
        } else {
            $resultado = $this->db->Execute($sql);
            $dados->id = $this->db->insert_Id();
        }
        return $resultado;
    }

    function excluir($id) {
        $sql = "delete from processo where id=" . $id;
        $resultado = $this->db->Execute($sql);
        return $resultado;
    }

}

