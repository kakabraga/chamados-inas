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
    if ($usuario_logado->perfil >= 1) {
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
                <a class="nav-link collapsed" href="assuntos.php">
                    <i class="fa fa-cogs"></i>
                    <span>Gerenciar Assuntos</span>
                </a>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="tipos_liminar.php">
                    <i class="fa fa-cogs"></i>
                    <span>Gerenciar Tipos de liminares</span>
                </a>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="situacoes_processuais.php">
                    <i class="fa fa-laptop"></i>
                    <span>Gerenciar Situações Processuais</span>
                </a>
            </li>
              <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="processos.php">
                    <i class="fa fa-laptop"></i>
                    <span>Gerenciar Processos</span>
                </a>
            </li>
            <?php
        }
        ?>

        <?php
    }
    ?>
     <!-- Divider -->
     <hr class="sidebar-divider">

<!-- Nav Item - Pages Collapse Menu -->
<?php
    if ($usuario_logado->perfil <= 3) {
        ?>
             <!-- Nav Item - Pages Collapse Menu -->
             <li class="nav-item">
                <a class="nav-link collapsed" target="_black" href="painel_juridico.php">
                    <i class="fa fa-window-maximize"></i>
                    <span>Painel Jurídico</span>
                </a>
            </li>
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