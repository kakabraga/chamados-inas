<?php

date_default_timezone_set('America/Sao_Paulo');

include_once('actions/ManterChamado.php');
include_once('actions/ManterUsuario.php');
include_once('actions/ManterCategoria.php');
include_once('actions/ManterSetor.php');

$manterChamado = new ManterChamado();
$manterUsuario = new ManterUsuario();
$manterCategoria = new ManterCategoria();
$manterSetor = new ManterSetor();

$lista = $manterChamado->listar();

foreach ($lista as $obj) {
    $txt_status = '<img src="img/chamado_aberto.svg" title="Novo" width="50" />';
    switch ($obj->status) {
        case 0:
            $txt_status = '<img src="img/chamado_aberto.svg" title="Novo" width="50" />';
            break;
        case 1:
            $txt_status = '<img src="img/chamado_atendimento.svg" title="Em atendimento" width="50" />';
            break;
        case 2:
            $txt_status = '<img src="img/chamado_concluido.svg" title="Concluído" width="50" />';
            break;
        case 3:
            $txt_status = '<img src="img/chamado_cancelado.svg" title="Cancelado" width="50" />';
            break;
    }
    echo "<tr>";
    echo "  <td>".$obj->id."</td>";
    echo "  <td>" . $manterSetor->getSetorPorId($manterUsuario->getUsuarioPorId($obj->usuario)->setor)->sigla . "</td>";
    echo "  <td>" . $manterUsuario->getUsuarioPorId($obj->usuario)->nome . "</td>";
    echo "  <td>" . $manterCategoria->getCategoriaPorId($obj->categoria)->nome . "</td>";
    echo "  <td>" . date('d/m/Y', strtotime($obj->data_abertura)) . "</td>";
    echo "  <td>" . $txt_status . "</td>";
    if($obj->status != 2){
        echo "  <td align='center'><button class='btn btn-primary btn-sm' type='button' onclick='atender(".$obj->id.",\"".$manterUsuario->getUsuarioPorId($obj->usuario)->nome."\",\"".$obj->descricao."\",".$obj->categoria.")'><i class='fas fa-edit'></i></button>&nbsp;&nbsp;<button class='btn btn-danger btn-sm' type='button' onclick='cancelar(".$obj->id.",\"".$obj->nome."\")'><i class='far fa-trash-alt'></i></button></td>";
    } else {
        echo "  <td align='center'> - </td>";
    }
    echo "</tr>";
}

