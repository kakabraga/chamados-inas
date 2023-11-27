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

        <title>INAS - Perfil do usuário</title>

        <!-- Custom fonts for this template-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <script type="text/javascript" class="init">

            var equipes = [];
            var setores = [];
            var perfis = [];
<?php
include_once('./actions/ManterUsuario.php');
include_once('./dto/Usuario.php');
include_once('./actions/ManterEquipe.php');
include_once('./actions/ManterSetor.php');
include_once('./actions/ManterPerfil.php');

$manterUsuario = new ManterUsuario();

$id = $_REQUEST['id'];
$usuario = new Usuario();
$usuario =  $manterUsuario->getUsuarioPorId($id);
//print_r($usuario);

$manterEquipe = new ManterEquipe();
$manterSetor = new ManterSetor();
$manterPerfil = new ManterPerfil();

$listaE = $manterEquipe->listar();
$listaS = $manterSetor->listar();
$listaP = $manterPerfil->listar();

foreach ($listaE as $obj) {
    ?>item = {id: "<?= $obj->id ?>", equipe: "<?= $obj->equipe ?>"};
                equipes.push(item);
    <?php
}
foreach ($listaS as $obj) {
    ?>item = {id: "<?= $obj->id ?>", setor: "<?= $obj->sigla ?>"};
                setores.push(item);
    <?php
}
foreach ($listaP as $obj) {
    if ($obj->id >= $usuario_logado->perfil) {
        ?>item = {id: "<?= $obj->id ?>", perfil: "<?= $obj->perfil ?>"};
                perfis.push(item);
        <?php
    }
}
?>
        function carregaEquipes(id_atual) {
            var html = '<option value="">Selecione </option>';
            for (var i = 0; i < equipes.length; i++) {
                var option = equipes[i];
                var selected = "";
                if (id_atual > 0) {
                    if (option.id == id_atual) {
                        selected = "selected";
                    } else {
                        selected = "";
                    }
                }
                html += '<option value="' + option.id + '" ' + selected + '>' + option.equipe + '</option>';
            }
            $('#equipe').html(html);
        }
        function carregaSetores(id_atual) {
            var html = '<option value="">Selecione </option>';
            for (var i = 0; i < setores.length; i++) {
                var option = setores[i];
                var selected = "";
                if (id_atual > 0) {
                    if (option.id == id_atual) {
                        selected = "selected";
                    } else {
                        selected = "";
                    }
                }
                html += '<option value="' + option.id + '" ' + selected + '>' + option.setor + '</option>';
            }
            $('#setor').html(html);
        }
        function carregaPerfis(id_atual) {
            var html = '<option value="">Selecione </option>';
            for (var i = 0; i < perfis.length; i++) {
                var option = perfis[i];
                var selected = "";
                if (id_atual > 0) {
                    if (option.id == id_atual) {
                        selected = "selected";
                    } else {
                        selected = "";
                    }
                }
                html += '<option value="' + option.id + '" ' + selected + '>' + option.perfil + '</option>';
            }
            $('#perfil').html(html);
        }

        $(document).ready(function () {
            //$('#usuarios').DataTable();
            //$('#id').val(0);
            carregaEquipes(0);
            carregaSetores(0);
            carregaPerfis(0);
        });
        function excluir(id, nome) {
            $('#delete').attr('href', 'del_usuario.php?id=' + id);
            $('#nome_excluir').text(nome);
            $('#confirm').modal({show: true});
        }
        function alterar(id, login, nome, senha, email, ativo, id_equipe, id_setor, id_perfil) {
            $('#id').val(id);
            $('#login').val(login);
            $('#nome').val(nome);
            $('#senha').val(senha);
            $('#email').val(email);
            $('#ativo').val(ativo);
            if (ativo == 1) {
                $('#ativo').prop('checked', true);
            } else {
                $('#ativo').prop('checked', false);
            }
            carregaEquipes(id_equipe);
            carregaSetores(id_setor);
            carregaPerfis(id_perfil);
            $('#form_usuario').collapse("show");
            $('#btn_cadastrar').hide();
        }


        </script>
        <style>
            body{
                font-size: small;
            }
            a:link {text-decoration: none;}
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
                    <!-- Page Content-->
                    <div class="container px-4 px-lg-5 border-primary" id="form_usuario" style="max-width:900px">
                    <!-- Heading Row-->
                    <div class="row gx-4 gx-lg-4 align-items-center my-5">
                        <div class="col-lg-5">
                        <?php
                                $dir = './ft/';
                                $imagem = '<i class="fa fa-user-circle fa-4x" aria-hidden="true"></i>';
                                $style = 'style=" border-radius: 10%; background-color: #ddd; height: 190px; object-fit: cover; width: 190px;"';
                                if (file_exists($dir .$usuario->id . '.jpg' )) {
                                    $foto = $dir . $usuario->id . '.jpg';
                                    $imagem = '<img '.$style.' src="'.$foto.'" alt="Foto perfil" />';
                                } else if (file_exists($dir .$usuario->id . '.jpeg' )) {
                                    $foto = $dir . $usuario->id . '.jpeg';
                                    $imagem = '<img '.$style.' src="'.$foto.'" alt="Foto perfil" />';
                                } 
                                echo $imagem;
                                ?>
                        </div>
                        <div class="col-lg-7">
                            <strong><h3 class="font-weight-light"><?=$usuario->nome ?></h3></strong>
                            <p> <?=$usuario->matricula ?><br/>
                                <?=$manterSetor->getSetorPorId($usuario->setor)->sigla ?><br/>
                                <?php
                                $txt_whatsapp = str_replace( '(', '', $usuario->whatsapp);
                                $txt_whatsapp = str_replace( ')', '', $txt_whatsapp);
                                $txt_whatsapp = str_replace( '-', '', $txt_whatsapp);
                                ?>
                                <?=$usuario->email ?><br/>
                                <a href="mailto:<?=$usuario->email ?>" target="_blank">
                                <img src="img/email.svg" width="5%"> <?=$usuario->email ?></a><br/>
                                <a href="https://api.whatsapp.com/send?phone=55<?=$txt_whatsapp ?>" target="_blank">
                                <img src="img/whatsapp.svg" width="5%"> <?=$usuario->whatsapp ?></a><br/>
                                <a href="<?=$usuario->linkedin ?>" target="_blank">
                                <img src="img/linkedin.svg" width="5%"> <?=$usuario->linkedin ?></a><br/>
                                
                            </p>
                            <a class="btn btn-danger" href="#!">Alterar</a>
                        </div>
                    </div>
                    <!-- Call to Action-->
                    <div class="card text-white bg-gradient-primary my-5 py-2 text-center">
                        <p class="text-white m-0 h4">Minhas Tarefas</p>
                    </div>
                    <!-- Content Row-->
                    <div class="row gx-4 gx-lg-5">
                        <div class="col-md-4 mb-5">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h2 class="card-title">Card One</h2>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                                </div>
                                <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h2 class="card-title">Card Two</h2>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
                                </div>
                                <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h2 class="card-title">Card Three</h2>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                                </div>
                                <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
