<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/model/Model.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/model/Usuario.php');

class ManterUsuario extends Model {

    function __construct() { //metodo construtor
        parent::__construct();
    }

    function listar() {
        $sql = "select u.matricula,u.nome,u.senha,u.idsetor,u.idperfil (select count(*) from chamado as c where u.matricula=c.matricula) as dep FROM setor as s order by u.nome";
        
        $resultado = $this->db->Execute($sql);
        //var_dump($resultado);
        $array_dados = array();
        if($resultado){
            while ($registro = $resultado->FetchRow()) {
                $dados = new Usuario();
                $dados->excluir = true;
                if ($registro["dep"] > 0) {
                    $dados->excluir = false;
                }
                $dados->matricula   = $registro["matricula"];
                $dados->nome        = utf8_encode($registro["nome"]);
                $dados->senha       = $registro["senha"];
                $dados->idsetor     = $registro["idsetor"];
                $dados->idperfil    = $registro["idperfil"];
                $array_dados[]      = $dados;
            }
        }
        return $array_dados;
    }
    function getUsuarioPorMatricula($matricula) {
        $sql = "select u.matricula,u.nome,u.senha,u.idsetor,u.idperfil FROM usuario as s WHERE matricula=$matricula";
        //echo $sql;
        $resultado = $this->db->Execute($sql);
        $dados = new Usuario();
        while ($registro = $resultado->fetchRow()) {
            $dados->matricula   = $registro["matricula"];
            $dados->nome        = utf8_encode($registro["nome"]);
            $dados->senha       = $registro["senha"];
            $dados->idsetor     = $registro["idsetor"];
            $dados->idperfil    = $registro["idperfil"];
        }
        return $dados;
    }
    function salvar(Usuario $dados, $update = 0) {
        $dados->nome = utf8_decode($dados->nome);
        $dados->senha = utf8_decode($dados->senha);
        $sql = "insert into usuario (matricula,nome,senha,idsetor,idperfil,ativo) values ('" . $dados->matricula . "','" . $dados->nome . "',MD5('" . $dados->senha . "'),'" . $dados->idsetor . "','" . $dados->idperfil . "',1)";
        if ($update > 0) {
            $sql_senha = "";
            if(isset($dados->senha) && $dados->senha !="" ){
                $sql_senha = ", senha=MD5('" . $dados->senha . "') ";
            }
            $sql = "update usuario set nome='" . $dados->nome . "', idsetor='" . $dados->idsetor . "', idperfil='" . $dados->idperfil . $sql_senha . "' where matricula='$dados->matricula'";
            $resultado = $this->db->Execute($sql);
        } else {
            $resultado = $this->db->Execute($sql);
            $dados->id = $this->db->insert_Id();
        }
        //echo $sql;
        return $resultado;
    }

    function excluir($matricula) {
        $sql = "delete from usuario where matricula=" . $matricula;
        $resultado = $this->db->Execute($sql);
        return $resultado;
    }

}

