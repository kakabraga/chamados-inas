<?php
date_default_timezone_set('America/Sao_Paulo');

require_once('./actions/ManterAgenda.php');
require_once('./actions/ManterNotificacao.php');
require_once('./dto/Notificacao.php');

$db_agenda = new ManterAgenda();

$filtro = " WHERE DATE_FORMAT(inicio,'%d/%m/%Y') = DATE_FORMAT(now(),'%d/%m/%Y') AND a.notificado=0 ";

$agendamentos_dia = $db_agenda->listar($filtro);

// Registrando notificação
$db_notificacao = new ManterNotificacao();
//lista eventos do dia que não foram notificados
foreach ($agendamentos_dia as $obj) {
    $tempo = strtotime($obj->inicio) - strtotime($obj->agora);
    if($tempo <= 7200){
        $n = new Notificacao();
        $inicio = date('H:i', strtotime($obj->inicio));
        $n->texto   = "Você tem evento pra hoje às ". $inicio ."!";
        $n->link = 'agenda.php?id='.$obj->usuario;
        $n->tipo = 'agenda';
        $n->usuario = $obj->usuario;
        $db_notificacao->salvar($n);

        $db_agenda->salvarNotificacao($obj->id);
    }
}

