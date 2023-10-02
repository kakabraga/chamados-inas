<?php

include_once('Model.php');

class Login extends Model {

    function Login() {//metodo construtor
        parent::model();
    }

    function logar($matricula, $senha) {
        $sql = "SELECT matricula, nome, senha, integrar, ativo, id_perfil, id_setor FROM usuario   WHERE matricula='" . $matricula . "' AND ativo=1";
        //echo 'SQL:'.$sql;
        $resultado = $this->db->Execute($sql);
        if ($registro = $resultado->fetchRow()) {
            if (!strcmp($registro["senha"], $senha)) {
                $dados = new Usuario();
                $dados->matricula   = $registro["matricula"];
                $dados->nome        = utf8_encode($registro["nome"]);
                $dados->senha       = utf8_encode($registro["senha"]);
                $dados->ativo       = $registro["ativo"];
                $dados->perfil      = $registro["id_perfil"];
                $dados->setor       = $registro["id_setor"];
                
                return $dados; 
            } else {
                return false;
            }
        }
        return false;
    }

}

?>