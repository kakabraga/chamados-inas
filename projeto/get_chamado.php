<?php

date_default_timezone_set('America/Sao_Paulo');

include_once('actions/ManterChamado.php');
include_once('actions/ManterUsuario.php');

$manterChamado = new ManterChamado();
$manterUsuario = new ManterUsuario();

$lista = $manterChamado->listar();

foreach ($lista as $obj) {
    $txt_status = '<img src="img/chamado_aberto.svg" width="50" />';
    switch ($obj->status) {
        case 0:
            $txt_status = '<img src="img/chamado_aberto.svg" width="50" />';
            break;
        case 1:
            $txt_status = '<img src="img/chamado_atendimento.svg" width="50" />';
            break;
        case 2:
            $txt_status = '<img src="img/chamado_concluido.svg" width="50" />';
            break;
        case 3:
            $txt_status = '<img src="img/chamado_cancelado.svg" width="50" />';
            break;
    }
    echo "<tr>";
    echo "  <td>".$obj->id."</td>";
    echo "  <td>" . $manterUsuario->getUsuarioPorId($obj->usuario) . "</td>";
    echo "  <td>" . date('d/m/Y', strtotime($obj->data_abertura)) . "</td>";
    echo "  <td>" . $txt_status . "</td>";
    echo "  <td>" . date('d/m/Y', strtotime($obj->inicio)) . "</td>";
    echo "  <td>" . date('d/m/Y', strtotime($obj->fim)) . "</td>";
    echo "  <td align='center'> - </td>";
    echo "</tr>";
}

