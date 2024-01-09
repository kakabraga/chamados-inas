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

        <title>GERENTE - Gerenciador de atendimentos</title>

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

        <script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js" integrity="sha384-THVO/sM0mFD9h7dfSndI6TS0PgAGavwKvB5hAxRRvc0o9cPLohB0wb/PTA7LdUHs" crossorigin="anonymous"></script>

        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>


        <script src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.min.js"></script>

        <style>
            body{
                font-size: small;
            }
            .nao-ver{
                display:none;
            }
        </style>
        <script type="text/javascript" class="init">
            function naover(classe) {
                $("." + classe).css("display", "none");
                //$('#btn_editar').toggleClass('fa-lock fa-unlock');
            }
            $(document).ready(function () {
                $("#btnExport").click(function () {
                    let table = $("#atendimentos");
                    TableToExcel.convert(table[0], {// html code may contain multiple tables so here we are refering to 1st table tag
                        name: 'export.xlsx', // fileName you could use any name
                        sheet: {
                            name: 'Sheet 1' // sheetName
                        }
                    });
                });

                $("#btnPDF").click(function () {
                    savePDF();
                });

            });




        </script>
    </head>

    <body id="page-top">

        <?php
        include_once('actions/ManterAtendimento.php');
        include_once('actions/ManterFila.php');
        include_once('actions/ManterUsuario.php');
        include_once('actions/ManterServico.php');
        include_once('actions/ManterGuiche.php');

        $mUsuario = new ManterUsuario();
        $mAtendimento = new ManterAtendimento();
        $mFila = new ManterFila();
        $mServico = new ManterServico();
        $mGuiche = new ManterGuiche();

        $inicio = isset($_REQUEST['inicio']) ? $_REQUEST['inicio'] : 0;
        $termino = isset($_REQUEST['termino']) ? $_REQUEST['termino'] : 0;

        $where = " ";
        $cont_param = 1;
        if ($inicio != 0) {
            if ($cont_param > 0) {
                $where .= " AND ";
            }
            $where .= " f.atendimento >='" . $inicio . " 07:00'";
            $cont_param++;
        }
        if ($termino != 0) {
            if ($cont_param > 0) {
                $where .= " AND ";
            }
            $where .= " f.atendimento <='" . $termino . " 19:00'";
            $cont_param++;
        }

        $atendimentos = array();
        if ($cont_param > 0) {
            $atendimentos = $mAtendimento->listarRelatorio($where);
        } else {
            $atendimentos = $mAtendimento->listarRelatorio();
        }
        ?>
        <!-- Begin Page Content -->
        <div id="containerAtendimento" class="container-fluid align-items-center" style="width:95%">
            <!-- Content Row -->

            <?php
            if (count($atendimentos) > 0) {
                ?>

            <div id="containerAtendimento" role="main" class="align-items-center" style="width:100%"><h2 class="text-center">Relatório de Atendimentos</h2><img src="img/iconexcel.png" width="30" height="30" class="d-print-none" id="btnExport" />
                    <table class="table table-striped" id="atendimentos">
                        <tr class="thead-dark">
                            <th class="header c0 text-nowrap text-center" style="" scope="col"><i class="fa fa-minus-square text-white c0" onclick="naover('c0');" aria-hidden="true" title="Remover coluna"></i> CPF </th>
                            <th class="header c1 text-nowrap text-center" style="" scope="col"><i class="fa fa-minus-square text-white c1" onclick="naover('c1');" aria-hidden="true" title="Remover coluna"></i> NOME </th>
                            <th class="header c2 text-nowrap text-center" style="" scope="col" style="width:50%"><i class="fa fa-minus-square text-white c2" onclick="naover('c2');" aria-hidden="true" title="Remover coluna"></i> ATENDIMENTO </th>
                            <th class="header c3 text-nowrap text-center" style="" scope="col"><i class="fa fa-minus-square text-white c3" onclick="naover('c3');" aria-hidden="true" title="Remover coluna"></i> SERVIÇO </th>
                            <th class="header c4 text-nowrap text-center" style="" scope="col"><i class="fa fa-minus-square text-white c4" onclick="naover('c4');" aria-hidden="true" title="Remover coluna"></i> ATENDENTE </th>
                            <th class="header c5 text-nowrap text-center" style="" scope="col"><i class="fa fa-minus-square text-white c5" onclick="naover('c5');" aria-hidden="true" title="Remover coluna"></i> GUICHÊ</th>
                            <th class="header c6 lastcol text-nowrap text-center" style="" scope="col"><i class="fa fa-minus-square text-white c6" onclick="naover('c6');" aria-hidden="true" title="Remover coluna"></i> DETALHAMENTO </th>
                        </tr>
                        <?php
                        foreach ($atendimentos as $obj) {
                            $fila = $mFila->getFilaPorId($obj->fila);
                            ?>
                            <tr class="">
                                <td class="cell c0 text-dark " style=""><?= $fila->cpf ?></td>
                                <td class="cell c1 text-dark " style=""><?= $fila->nome ?></td>
                                <td class="cell c2 text-dark " style=""><?= date('d/m/Y h:i', strtotime($fila->atendimento)) ?></td>
                                <td class="cell c2 text-dark " style=""><?= $obj->tempo ?></td>
                                <td class="cell c3 text-dark " style=""><?= $mServico->getServicoPorId($fila->servico)->nome ?></td>
                                <td class="cell c4 text-dark " style=""><?= $mUsuario->getUsuarioPorId($obj->usuario)->nome ?></td>                                
                                <td class="cell c5 text-dark text-center" style="">Guichê <?= $mGuiche->getGuichePorId($obj->guiche)->numero ?></td>
                                <td class="cell c6 text-dark " style=""><?= $obj->detalhamento ?></td>
                            </tr>   
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>  
                <?php
            }
            ?>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</body>

</html>