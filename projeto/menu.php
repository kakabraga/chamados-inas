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
foreach ($acessos as $acesso) {
    if($acesso->id_modulo != 1){
        $icon_css = "";
        switch ($acesso->id_modulo) {
            case 2:
                $icon_css = "fa fa-cogs";
                break;
            case 3:
                $icon_css = "fa fa-id-card";
                break;
            case 4:
                $icon_css = "fa fa-laptop";
                break;
            case 5:
                $icon_css = "fa fa-tasks";
                break;
            case 6:
                $icon_css = "fa fa-balance-scale";
                break; 
            case 7:
                $icon_css = "fa fa-id-badge";
                break; 
            case 8:
                $icon_css = "fa fa-calendar";
                break;             
        }
?> 
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?=$acesso->link ?>">
                    <i class="<?=$icon_css ?>"></i>
                    <span><?=$acesso->modulo ?></span>
                </a>
            </li>
            <!-- Divider -->
        <hr class="sidebar-divider">
            <?php
    }

    }
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