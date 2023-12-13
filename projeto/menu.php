<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<br/>
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon mx-1"><img src="img/inas.svg" width="100%" /></div>
</a>
<br/>
<!-- Divider -->
<hr class="sidebar-divider">
    <?php
    if (isse($usuario_logado->perfil)) {
        ?>

        <!-- Heading -->
        <div class="sidebar-heading">
            SISTEMAS
        </div>
        <?php
        if ($usuario_logado->perfil <= 2) {
            ?>        
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="index_gerente.php">
                    <i class="fa fa-id-card"></i>
                    <span>GERENTE</span>
                </a>
            </li>    
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="index_chamados.php">
                    <i class="fa fa-user"></i>
                    <span>CHAMADOS</span>
                </a>
            </li>
            <?php
        }
        if ($usuario_logado->perfil == 1 || $usuario_logado->perfil == 8 || $usuario_logado->perfil == 9) {
            ?>        
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="gerenciar_fila.php">
                    <i class="fa fa-file" aria-hidden="true">
                    <span>ATENDIMENTO</span></a>
            </li>
            <?php
        }
        ?>        

        <?php
    }
    ?>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
