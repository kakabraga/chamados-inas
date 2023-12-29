<?php
require_once('./verifica_login.php');

$tipo     = isset($_REQUEST['s']) ? $_REQUEST['s'] : 0;
$txt_tipo = "Pendentes";
if($tipo!=0){
    $txt_tipo = "Concluídas";
}
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
            var categorias = [];
            
            <?php
            include_once('actions/ManterCategoria.php');
            $mCategoria = new ManterCategoria();
            
            if ($usuario_logado->perfil <= 2) {
                $listaCatgorias = $mCategoria->listar();
                foreach ($listaCatgorias as $obj) {
                    ?>item = {id: "<?= $obj->id ?>", nome: "<?= $obj->equipe ?>"};
                        categorias.push(item);
                    <?php
                }
            }


            ?>

            $(document).ready(function () {
                $('#chamados').DataTable();
                carregaCategorias(0);
            });
            function excluir(id, nome) {
                $('#delete').attr('href', 'del_chamado.php?id=' + id);
                $('#nome_excluir').text(nome);
                $('#confirm').modal({show: true});              
            }
            function atender(id,usuario,descricao,categoria) {
                $('#atender_id').val(id);
                $('#atender_usuario').text(usuario);
                $('#atender_descricao').text(descricao);
                carregaCategorias(categoria);
                $('#atender').modal({show: true});              
            }
            function alterar(id, nome, descricao) {
                $('#id').val(id);
                $('#nome').val(nome);
                $('#descricao').val(descricao);
                $('#form_chamado').collapse("show");
                $('#btn_cadastrar').hide();
            }

            function selectByText(select, text) {
                $(select).find('option:contains("' + text + '")').prop('selected', true);
            }
        function carregaCategorias(id_atual) {
            var html = '<option value="">Selecione </option>';
            for (var i = 0; i < responsaveis.length; i++) {
                var option = categorias[i];
                if (option.nome == nome || nome == 0) {
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
            }
            $('#categoria').html(html);
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
            <?php include './menu_chamados.php'; ?>
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <?php include './top_bar.php'; ?>

                    <div class="container-fluid">
                        <?php include './form_chamado.php'; ?>
                        <!-- Project Card Example -->
                        <div class="card mb-4 border-primary" style="max-width:900px">
                            <div class="row ml-0 card-header py-2 bg-gradient-primary" style="width:100%">
                                <div class="col-sm ml-0" style="max-width:50px;">
                                    <i class="fa fa-id-card fa-2x text-white"></i> 
                                </div>
                                <div class="col mb-0">
                                    <span style="align:left;" class="h5 m-0 font-weight text-white">Chamados <?=$txt_tipo ?></span>
                                </div>
                                <div class="col text-right" style="max-width:20%">
                                    <button id="btn_cadastrar" class="btn btn-outline-light btn-sm" type="button" data-toggle="collapse" data-target="#form_chamado" aria-expanded="false" aria-controls="form_chamado">
                                        <i class="fa fa-plus-circle text-white" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="chamados" class="table-sm table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Setor</th>
                                            <th scope="col">Usuário</th>
                                            <th scope="col">Categoria</th>
                                            <th scope="col">Aberto em</th>
                                            <th scope="col">Status</th>
                                            <th scope="col" style="width:30px;">Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php include './get_chamado.php'; ?>
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
        <!-- Modal excluir -->
        <div class="modal fade" id="atender" role="dialog">
            <form id="form_atendimento" action="atender_chamado.php" method="post">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Atender chamado</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p><span id="atender_usuario"></span><br/>
                            <strong>"<span id="atender_descricao"></span>"</strong>?</p>
                        </div>
                        <div class="form-group row">
                    <label for="categoria" class="col-sm-2 col-form-label">Categoria:</label>
                    <div class="col-sm-10">
                        <select id="categoria" name="categoria" class="form-control form-control-sm" required>
                            <option value="">Selecione</option>    
                        </select>
                    </div>
                    </div> 
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="btn_atender">Atender</button>
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancelar</button>
                        </div>
                    </div>            
                </div>
            </form>
        </div>

    </body>

</html>
