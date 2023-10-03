<!-- Begin Page Content -->

<!-- Collapsable Form -->
<div class="card mb-4 collapse hide border-box" id="form_perfil" style="max-width:700px">
    <!-- Card Header - Accordion -->
    <div class="card-header py-2 card-body bd-titulo align-middle" style="min-height: 2.5rem;">               
        <span class="h6 m-0 font-weight text-white">Cadastro de Perfil</span>
    </div>
    <!-- Card Content - Collapse -->
    <div class="card-body">
        <form id="form_cadastro" action="save_perfil.php" method="post">
            <input type="hidden" id="id" name="id"/>
            <div class="form-group row">
                <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
                <div class="col-sm-10">
                    <input type="text" name="nome" class="form-control form-control-sm" id="nome" placeholder="Perfil" required>
                </div>
            </div>
            <div class="form-group row float-right">
                <button type="reset" onclick="$('#btn_cadastrar').show();" data-toggle="collapse" data-target="#form_perfil" class="btn btn-danger btn-sm"><i class="fa fa-minus-square"></i> Cancelar</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Salvar</button>
                &nbsp;&nbsp;&nbsp;
            </div>
        </form>                  
    </div>
</div>
<!-- /.container-fluid -->


