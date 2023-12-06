<?php

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

        <title>Atendimento - GDF Saúde</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="favicon.ico" />
        <!------ Include the above in your HEAD tag ---------->

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">

        <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript" language="javascript" src="js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
        <script type="text/javascript" class="init">
            var servicos = [];
<?php
include_once('./actions/ManterServico.php');
$manterServico = new ManterServico();

$listaS = $manterServico->listar();

foreach ($listaS as $obj) {
    ?>item = {id: "<?= $obj->id ?>", nome: "<?= $obj->nome ?>"};
        servicos.push(item);
    <?php
}
?>         
            $(document).ready(function () {
                //$('#fila').DataTable();
                carregaServicos(0);
            });
            function excluir(id, nome) {
                $('#delete').attr('href', 'del_fila.php?id=' + id);
                $('#nome_excluir').text(nome);
                $('#confirm').modal({show: true});              
            }
            function alterar(id, nome, id_servico) {
                $('#id').val(id);
                $('#nome').val(nome);
                $('#form_fila').collapse("show");
                $('#btn_cadastrar').hide();
                carregaServicos(id_servico);
            }

            function selectByText(select, text) {
                $(select).find('option:contains("' + text + '")').prop('selected', true);
            }
            function carregaServicos(id_atual) {
            var html = '<option value="">Selecione </option>';
            for (var i = 0; i < servicos.length; i++) {
                var option = servicos[i];
                var selected = "";
                if (id_atual > 0) {
                    if (option.id == id_atual) {
                        selected = "selected";
                    } else {
                        selected = "";
                    }
                }
                html += '<option value="' + option.id + '" ' + selected + '>' + option.nome + '</option>';
            }
            $('#servico').html(html);
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
            <?php include './menu.php'; ?>
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <?php include './top_bar.php'; ?>

                    <div class="container-fluid">
                        <!-- Begin Page Content -->
<?php
    include_once('./actions/ManterGuiche.php');
    $manterGuiche = new ManterGuiche();
    $guiche = $manterGuiche->getGuichePorUsuario($usuario_logado->id);
    if(isset($guiche->id)){  
?>
    <!-- Collapsable Form -->
    <div class="card mb-4 border-primary" id="atendente" style="max-width:900px">
        <!-- Card Header - Accordion -->
        <div class="card-header py-2 card-body bg-gradient-primary align-middle" style="min-height: 2.5rem;">               
            <span class="h6 m-0 font-weight text-white">Atendente</span>
        </div>                  
        <!-- Card Content - Collapse -->
        <div class="card-body card-deck">
            <div class="card bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header h4">Nome</div>
                <div class="card-body">
                <center><h5 class="card-title"><?=$usuario_logado->nome ?></h5></center>
                </div>
            </div>
            <div class="card bg-gradient-primary mb-3 text-white" style="max-width: 18rem;">
                <div class="card-header h4">Guichê</div>
                <div class="card-body">
                    <center><h1 class="card-title"><?=$guiche->numero ?></h2></center>
                </div>
            </div>           
        </div>
    </div>
    <!-- /.container-fluid -->
<?php
    }
?>

                        <!-- Project Card Example -->
                        <div class="card mb-4 border-primary" style="max-width:900px">
                            <div class="row ml-0 card-header py-2 bg-gradient-primary" style="width:100%">
                                <div class="col-sm ml-0" style="max-width:50px;">
                                    <i class="fas fa-users fa-2x text-white"></i> 
                                </div>
                                <div class="col mb-0">
                                    <span style="align:left;" class="h5 m-0 font-weight text-white">Fila</span>
                                </div>
                            </div>                            

                            <div class="card-body">
                                <table id="filaes" class="table-sm table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">Ordem</th>
                                            <th scope="col">Nome</th>
                                            <th scope="col">Serviço</th>
                                            <th scope="col">Preferencial</th>
                                            <th scope="col">Chamado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php include './get_fila.php'; ?>
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
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Deseja excluir <strong>"<span id="nome_excluir"></span>"</strong>?</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#" type="button" class="btn btn-danger" id="delete">Excluir</a>
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancelar</button>
                    </div>
                </div>

            </div>
        </div>

    </body>

</html>
