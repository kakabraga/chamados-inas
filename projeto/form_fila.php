<!-- Begin Page Content -->

<!-- Collapsable Form -->
<div class="card mb-4 border-primary" id="form_fila" style="max-width:900px">
    <!-- Card Header - Accordion -->
    <div class="card-header py-2 card-body bg-gradient-primary align-middle" style="min-height: 2.5rem;">               
        <span class="h6 m-0 font-weight text-white">Incluir na fila de atendimento</span>
    </div>                  
    <!-- Card Content - Collapse -->
    <div class="card-body">
        <form id="form_cadastro" action="save_fila.php" method="post">
            <input type="hidden" id="id" name="id"/>
            <div class="form-group row">
                <label for="cpf" class="col-sm-2 col-form-label">CPF:</label>
                <div class="col-sm-10">
                    <input type="text" name="cpf" class="form-control form-control-sm" id="cpf" placeholder="Só números" onkeypress="$(this).mask('000.000.000-00');" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
                <div class="col-sm-10">
                    <input type="text" name="nome" class="form-control form-control-sm" id="nome" placeholder="Nome" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="servico" class="col-sm-2 col-form-label">Serviço:</label>
                <div class="col-sm-10">
                    <select id="servico" name="servico" class="form-control form-control-sm" required>
                        <option value="">Selecione</option>    
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" value="1" name="preferencial" role="switch" id="preferencial">
                    <label class="form-check-label" for="preferencial">Preferencial</label>
                </div>
                </div>
            </div>
            <div class="form-group row float-right">
                <button type="reset" data-target="#form_fila" class="btn btn-danger btn-sm"><i class="fa fa-minus-square"></i> Cancelar</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Salvar</button>
                &nbsp;&nbsp;&nbsp;
            </div>
        </form>                  
    </div>
</div>
<!-- /.container-fluid -->

