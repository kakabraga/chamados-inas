<?php

require_once('./actions/ManterSetor.php');
require_once('./dto/Usuario.php');

$mSetor = new ManterSetor();

?>        
        <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Search -->
                        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <div class="input-group-append">
                                </div>
                            </div>
                        </form>
                        
                        <!-- Topbar Navbar-->
                        <ul class="navbar-nav ml-auto">                                              
                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600"><?=$usuario_logado->nome ?>( <?=$mSetor->getSetorPorId($usuario_logado->setor)->sigla ?> )</span>
                                    <?php
                                    $dir = './ft/';
                                    $imagem = '<i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>';
                                    $style = 'style=" border-radius: 50%; background-color: #ddd; height: 60px; object-fit: cover; width: 60px;"';
                                    if (file_exists($dir .$usuario_logado->id . '.jpg' )) {
                                        $foto = $dir . $usuario_logado->id . '.jpg';
                                        $imagem = '<img '.$style.' src="'.$foto.'" alt="Foto perfil" />';
                                    }
                                    echo $imagem;
                                    ?>        
                                </a>
                      
                                <!-- Dropdown - User Information --> 
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="alterar_foto.php">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Alterar Foto
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="sair.php" >
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Sair
                                    </a>
                                </div>
                            </li>

                        </ul>
                        
                    </nav>
                    <!-- End of Topbar -->