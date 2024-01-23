<?php
//Atendimento
$mod = 4;
require_once('./verifica_login.php');
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Chamados - INAS</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,6>

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="favicon.ico" />
        <!------ Include the above in your HEAD tag ---------->

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter>        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTab>        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/cs>

        <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.>        <script type="text/javascript" language="javascript" src="js/jquery.dataTables.min.js"></sc>        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.2>        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/respon>        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/respon>        <script type="text/javascript" class="init">
            var usuarios = [];
<?php
include_once('./actions/ManterUsuario.php');
$manterUsuario = new ManterUsuario();


$listaU = $manterUsuario->getUsuariosPorEquipe(14);

foreach ($listaU as $obj) {
    ?>item = {id: "<?= $obj->id ?>", nome: "<?= strtoupper($obj->nome) ?>"};
        usuarios.push(item);
    <?php
}
?>
            $(document).ready(function () {
                $('#guiches').DataTable();
                carregaUsuarios(0);
            });
            function excluir(id, nome) {
                $('#delete').attr('href', 'del_guiche.php?id=' + id);
                $('#nome_excluir').text(nome);
                $('#confirm').modal({show: true});
            }
            function alterar(id, numero, id_usuario) {
                $('#id').val(id);
                $('#numero').val(numero);
                $('#form_guiche').collapse("show");
                $('#btn_cadastrar').hide();
                carregaUsuarios(id_usuario);
            }

            function selectByText(select, text) {
                $(select).find('option:contains("' + text + '")').prop('selected', true);
            }
            function carregaUsuarios(id_atual) {
            var html = '<option value="">Selecione </option>';
            for (var i = 0; i < usuarios.length; i++) {
                var option = usuarios[i];
                var selected = "";
                if (id_atual > 0) {
                    if (option.id == id_atual) {
                        selected = "selected";
                    } else {
                        selected = "";
                    }
                }
                html += '<option value="' + option.id + '" ' + selected + '>' + option.nome + '</op>            }
            $('#atendente').html(html);
        }

        </script>
        <style>
            body{
                font-size: small;
            }
        </style>
    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">
            <?php include './menu_atendimento.php'; ?>
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <?php include './top_bar.php'; ?>

                    <div class="container-fluid">
                        <?php include './form_guiche.php'; ?>
                        <!-- Project Card Example -->
                        <div class="card mb-4 border-primary" style="max-width:900px">
                            <div class="row ml-0 card-header py-2 bg-gradient-primary" style="width>                                <div class="col-sm ml-0" style="max-width:50px;">
                                    <i class="fa fa-desktop fa-2x text-white"></i>
                                </div>
                                <div class="col mb-0">
                                    <span style="align:left;" class="h5 m-0 font-weight text-white">                                </div>
                                <div class="col text-right" style="max-width:20%">
                                    <button id="btn_cadastrar" class="btn btn-outline-light btn-sm">                                        <i class="fa fa-plus-circle text-white" aria-hidden="true">>                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="guiches" class="table-sm table-striped table-bordered dt>                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Numero</th>
                                            <th scope="col">Atendente</th>
                                            <th scope="col" style="width:30px;">Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php include './get_guiche.php'; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End of Main Content -->
                </div>
                <?php include './rodape.php'; ?>

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <!-- Modal excluir -->
        <div class="modal fade" id="confirm" role="dialog">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirmação</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Deseja excluir <strong>"<span id="nome_excluir"></span>"</strong>?</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#" type="button" class="btn btn-danger" id="delete">Excluir</a>
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel>                    </div>
                </div>

            </div>
        </div>

    </body>

</html>
