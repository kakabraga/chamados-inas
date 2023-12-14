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
    if ($usuario_logado->perfil <= 2) {
        ?>

        <!-- Heading -->
        <div class="sidebar-heading">
        Gestão de Tarefas
        </div>
        <?php
        if ($usuario_logado->perfil <= 1) {
            ?>        
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="equipes.php">
                <i class="fa fa-users"></i>
                <span>Equipes</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="tarefas.php">
                <i class="fa fa-tasks"></i>
                <span>Tarefas</span>
            </a>
        </li>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="gerar_relatorio.php">
                <i class="fa fa-file"></i>
                <span>Relatórios</span>
            </a>
        </li> 
            <?php
        }
        ?>        
        <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="tarefas.php?filtro=equipe">
            <i class="fa fa-tasks"></i>
            <span>Tarefas da Equipe</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="tarefas.php?filtro=criador">
            <i class="fa fa-tasks"></i>
            <span>Minhas Tarefas</span>
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
