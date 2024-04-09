<!-- Begin Page Content -->

<!-- Collapsable Form -->
<div class="card mb-4 collapse hide border-primary" id="form_recepcao" style="max-width:900px">
    <!-- Card Header - Accordion -->
    <div class="card-header py-2 card-body bg-gradient-primary align-middle" style="min-height: 2.5rem;">               
        <span class="h6 m-0 font-weight text-white">Cadastro de Visitas</span>
    </div>                  
    <!-- Card Content - Collapse -->
    <div class="card-body">
        <form id="form_cadastro" action="save_recepcao.php" method="post">
            <input type="hidden" id="id" name="id"/>
            <input type="hidden" id="usuario" name="<?=$usuario_logado->id ?>"/>
            <div class="form-group row">
                <label for="visitante" class="col-sm-2 col-form-label">Visitante:</label>
                <div class="col-sm-10">
                    <input type="text" name="visitante" class="form-control form-control-sm" id="visitante" placeholder="Assunto" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="empresa" class="col-sm-2 col-form-label">Órgão/Empresa:</label>
                <div class="col-sm-10">
                    <input type="text" name="empresa" class="form-control form-control-sm" id="empresa" placeholder="Assunto" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="setor" class="col-sm-2 col-form-label">Setor:</label>
                <div class="col-sm-10">
                    <input type="text" name="setor" class="form-control form-control-sm" id="setor" placeholder="Assunto" required>
                </div>
                <label for="horario" class="col-sm-2 col-form-label">Horário:</label>
                <div class="col-sm-10">
                    <input type="text" name="horario" onkeypress="$(this).mask('00:00');" class="form-control form-control-sm" id="horario" placeholder="Assunto" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="recebido_por" class="col-sm-2 col-form-label">Recebido por:</label>
                <div class="col-sm-10">
                    <input type="text" name="recebido_por" class="form-control form-control-sm" id="recebido_por" placeholder="Assunto" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="assunto" class="col-sm-2 col-form-label">Assunto:</label>
                <div class="col-sm-10">
                    <input type="text" name="assunto" class="form-control form-control-sm" id="assunto" placeholder="Assunto" required>
                </div>
            </div>
            <div class="form-group row float-right">
                <button type="reset" data-toggle="collapse" data-target="#form_recepcao" class="btn btn-danger btn-sm"><i class="fa fa-minus-square"></i> Cancelar</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Salvar</button>
                &nbsp;&nbsp;&nbsp;
            </div>
        </form>                  
    </div>
</div>
<!-- /.container-fluid -->

