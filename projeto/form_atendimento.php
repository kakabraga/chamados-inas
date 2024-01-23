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
                        <!-- Begin Page Content -->
<?php
    include_once('./actions/ManterServico.php');
    include_once('./actions/ManterGuiche.php');
    include_once('./actions/ManterFila.php');
    include_once('./actions/ManterAtendimento.php'); 
    $manterServico = new ManterServico();
    $manterGuiche = new ManterGuiche();
    $manterFila = new ManterFila();
    $manterAtendimento = new ManterAtendimento();
    $id_fila = $_REQUEST['id'];
    $id_guiche = $_REQUEST['guiche'];

    $guicheA = $manterGuiche->getGuichePorUsuario($usuario_logado->id);
    $guiche = $manterGuiche->getGuichePorId($id_guiche);
    $fila = $manterFila->getFilaPorId($id_fila);

    if($guiche->id == $guicheA->id){  

        require_once('./dto/Atendimento.php');

        $atendimento            = new Atendimento();
        $atendimento            = $manterAtendimento->getAtendimentoPorFila($id_fila);
        $atendimento->fila      = $id_fila;
        $atendimento->guiche    = $id_guiche;
        $atendimento->usuario   = $usuario_logado->id;
        $atendimento = $manterAtendimento->salvar($atendimento);

        print_r($atendimento);
        if(isset($atendimento->id)){
            $manterFila->atender($id_fila);
        }
?>
    <!-- Collapsable Form -->
    <div class="card mb-4" id="atendente" style="max-width:900px">              
        <!-- Card Content - Collapse -->
        <div class="card-body card-deck d-flex justify-content-center" style="mim-width:200px">
            <div class="card bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header h4"><center>Atendente</center></div>
                <div class="card-body"><br/>
                <center><h3 class="card-title"><?=$usuario_logado->nome ?></h3></center>
                </div>
            </div>
            <div class="card bg-info mb-3 text-white" style="max-width: 18rem;">
                <div class="card-header h4"><center>Guichê</center></div>
                <div class="card-body">
                    <center><spam class="card-title" style="font-size:70px;"><b><?=$guiche->numero ?></b></spam></center>
                </div>
            </div>          
        </div>
    </div>
    <!-- /.container-fluid -->
<?php
    }
?>

                        <!-- Project Card Example -->
                        <div id="exibe">
                        </div>
                        <div class="card mb-4 border-primary" style="max-width:900px">
                            <div class="row ml-0 card-header py-2 bg-gradient-primary" style="width:100%">
                                <div class="col-sm ml-0" style="max-width:50px;">
                                    <i class="fas fa-users fa-2x text-white"></i> 
                                </div>
                                <div class="col mb-0">
                                    <span style="align:left;" class="h5 m-0 font-weight text-white">Atendimento</span>
                                </div>
                            </div>                            

                            <div class="card-body">
                                <spam class="h5">
                                CPF: <b><?=$fila->cpf ?></b><br/>
                                Nome: <b><?=$fila->nome ?></b><br/>
                                Serviço: <b><?=$manterServico->getServicoPorId($fila->servico)->nome ?></b><br/><br/>
                                </spam>
                            <form id="form_atendimento" action="save_atendimento.php" method="post">
                                <input type="hidden" id="id" name="id" value="<?=$atendimento->id ?>"/>
                                <input type="hidden" id="id_fila" name="id_fila" value="<?=$fila->id ?>"/>
                                <div class="form-group row">
                                    <label for="detalhamento" class="col-sm-2 col-form-label h5">Detalhamento:</label>
                                    <div class="col-sm-10">
                                        <textarea rows="3" name="detalhamento" class="form-control form-control-sm" id="detalhamento" placeholder="Detalhamento" required></textarea>
                                    </div>
                                </div>

                                <div class="form-group row float-right">
                                    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Salvar</button>
                                    &nbsp;&nbsp;&nbsp;
                                </div>
                            </form> 
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
    </body>
</html>
