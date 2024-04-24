<?php
//Administração
$mod = 8;
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

        <title>Agenda - Gerenciador de visitantes a agenda</title>

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
            $(document).ready(function () {
            });
            function excluir(id_visitante, nome, id_usuario) {
                $('#delete').attr('href', 'save_visitante_agenda.php?op=2&id_usuario=' + id_usuario +"&editor="+editor+"&id_visitante="+id_visitante);
                $('#nome_excluir').text(nome);
                $('#confirm').modal({show: true});              
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
            <?php include './menu_agenda.php'; ?>
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <?php include './top_bar.php'; ?>
                    <?php
                    include_once('actions/ManterAgenda.php');
                    include_once('actions/ManterUsuario.php');

                    $manterAgenda = new ManterAgenda();
                    $manterUsuario = new ManterUsuario();

                    if (isset($_REQUEST['id'])) {
                        $id_usuario = $_REQUEST['id'];                        
                        $usuario    = $manterUsuario->getUsuarioPorId($id_usuario);
                        $listaVisitantes = $manterAgenda->getVisitantesPorId($id_usuario);
                        $listaNaoVisitantes = $manterAgenda->getNaoVisitantesPorId($id_usuario);
                        $editar = false;
                        
                        //if ($chamado->status == 1 || $chamado->status == 4) {
                            //$editar = true;
                        //}
                        ?>
                        <div class="container-fluid">
                            <!-- Exibe dados da  tarefa -->
                            <div class="card mb-3 border-primary" style="max-width: 800px;">
                                <div class="card-body bg-gradient-primary" style="min-height: 5.0rem;">
                                    <div class="row">
                                        <div class="col c2 ml-2">
                                            <div class="h5 mb-0 text-white font-weight-bold">Gerenciar visitantes a agenda</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa fa-users fa-3x text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="c1 ml-4">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">ID:</div>
                                            <div class="mb-0"><?=$usuario->id ?></div>
                                        </div>
                                        <div class="c2 ml-4">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">Nome:</div>
                                            <div class="mb-0"><?=$usuario->nome ?></div>
                                        </div> 
                                    </div>
                                    <br/>
                                    <?php
                                        if($usuario_logado->perfil < 2 || $usuario_logado->id == $usuario->id){
                                     ?>
                                    <p class=" ml-2 card-text">
                                    <span class="mt-3 ml-2 h6 card-title">Novo visitante</span>
                                    <form id="form_cadastro" action="save_visitante_agenda.php" method="post">
                                        <input type="hidden" id="id_usuario" name="id_usuario" value="<?=$usuario->id ?>"/>
                                        <input type="hidden" id="op" name="op" value="1"/>
                                        <div class="form-group row">
                                            <label for="visitante" class="col-sm-2 col-form-label">Usuário:</label>
                                            <div class="col-sm-10">
                                            <select id="visitante" name="id_visitante" class="form-control form-control-sm" required>
                                                <option value="">Selecione</option>   
                                                <?php
                                                foreach ($listaNaoVisitantes as $u) {
                                                ?> 
                                                    <option value="<?=$u->id ?>"><?=$u->nome ?></option> 
                                                <?php
                                                }
                                                ?>
                                            </select>
                                            </div>
                                        </div>
                                        <!-- Deletar Evento -->
                                        <div class="form-group row"> 
                                            <div class="col-sm-offset-2 col-sm-10">
                                            <div class="checkbox">
                                                <label class="text-danger"><input type="checkbox" id="editor" name="editor" value="1"> Pode editar</label>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="form-group row float-right">
                                            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Incluir </button>
                                        </div>
                                    </form>   

                                    </p>
                                    <?php
                                     }
                                    ?>
                                </div>
                            </div>
                            <!-- fim da exibição -->
                            <?php
                        }
                        ?>


                        <div class="card mb-4 border-primary" style="max-width:800px">
                            <div class="row ml-0 card-header py-2 bg-gradient-primary" style="width:100%">
                                <div class="col-sm ml-0" style="max-width:50px;">
                                    <i class="fas fa-users fa-2x text-white"></i> 
                                </div>
                                <div class="col mb-0">
                                    <span style="align:left;" class="h5 m-0 font-weight text-white">Membros da equipe</span>
                                </div>
                            </div>                            

                            <div class="card-body">
                                <table id="acessos" class="table-sm table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">MATRÍCULA</th>
                                            <th scope="col">NOME</th>
                                            <th scope="col">REMOVER</th> 
                                        </tr>
                                    </thead>
                                    <tbody id="fila">
                                        <?php include './get_visitantes_agenda.php'; ?>
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
                        <p>Deseja remover o acesso de <strong>"<span id="nome_excluir"></span>"</strong>?</p>
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
