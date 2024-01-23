<?php
require_once('./verifica_login.php');

$busca = isset($_REQUEST['busca']) ? addslashes($_REQUEST['busca']) : '';
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

        <title>INAS-DF - Relatório de atendimento</title>

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
            <?php include './menu.php'; ?>
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <?php include './top_bar.php'; ?>

                    <div class="container-fluid">
                        <!-- Begin Page Content -->

                        <!-- Collapsable Form -->
                        <div class="card mb-4 border-primary" style="max-width: 700px;">
                            <!-- Card Header - Accordion -->
                            <div class="card-header py-2 card-body bg-gradient-primary align-middle" style="min-height: 2.5rem;">               
                                <span class="h6 m-0 font-weight text-white">Buscar Perfil</span>
                            </div>                
                            <!-- Card Content - Collapse -->
                            <div class="card-body">
                                <form id="form_busca" action="consultar_usuario.php" method="get">                       
                                    <div class="input-group" style="width: 600px">
                                        <label for="busca" class="col c0 col-form-label">Busca:</label>
                                        <input type="text" name="busca" value="<?=$busca ?>" class="col c1 form-control form-control-sm" id="busca" style="width: 350px">
                                        <button type="submit" class="ml-2 btn btn-primary btn-sm"><i class="fa fa-search" aria-hidden="true"></i> buscar </button>
                                    </div>
                                </form>                  
                            </div>
                        </div>
                        <div>
                        <?php
	include_once('actions/ManterUsuario.php'); 
    include_once('actions/ManterSetor.php'); 
        
	$manterUsuario = new ManterUsuario();
    $manterSetor = new ManterSetor();
    
    

    if ($busca != '') {
        ?>
        <table id="usuarios" class="table-sm table-striped table-bordered dt-responsive wrap" style="max-width: 700px;">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width:5%;">FOTO</th>
                                            <th scope="col" style="width:20%;">MATRÍCULA</th>
                                            <th scope="col" style="width:15%;">SETOR</th>
                                            <th scope="col">NOME</th>
                                            <th scope="col" class="align-middle nowrap" style="width:15%;">Ver Perfil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
        <?php

        $filtro = " WHERE nome LIKE '%".$busca."%' OR matricula LIKE '%".$busca."%' ";
        $lista = $manterUsuario->listar($filtro);
        foreach ($lista as $obj) {
            $dir = './ft/';
            $imagem = '<i class="fa fa-user-circle fa-4x" aria-hidden="true"></i>';
            $style = 'style=" border-radius: 10%; background-color: #ddd; height: 50px; object-fit: cover; width: 50px;"';
            if (file_exists($dir .$obj->id . '.jpg' )) {
                $foto = $dir . $obj->id . '.jpg';
                $imagem = '<img '.$style.' src="'.$foto.'" alt="Foto perfil" />';
            } else if (file_exists($dir .$obj->id . '.jpeg' )) {
                $foto = $dir . $obj->id . '.jpeg';
                $imagem = '<img '.$style.' src="'.$foto.'" alt="Foto perfil" />';
            } 
            echo "<tr>";
            echo "  <td>".$imagem."</td>";
            echo "  <td>".$obj->matricula."</td>";
            echo "  <td>".$manterSetor->getSetorPorId($obj->setor)->sigla."</td>";
            echo "  <td>".$obj->nome ."</td>";            
            echo '  <td align="center" valign="bottom" class="align-middle nowrap">
                        <a class="btn btn-warning btn-sm" href="perfil_usuario.php?id='.$obj->id.'">
                        <i class="fa fa-address-card" aria-hidden="true"></i>
                    </button></td>';
            echo "</tr>";
        }
        echo "</tbody></table>";
    }
        ?>
                        </div>
                    <!-- /.container-fluid -->
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
