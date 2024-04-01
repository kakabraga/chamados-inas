<!-- Begin Page Content -->

<!-- Collapsable Form -->
<div class="card mb-4 collapse hide border-primary" id="form_processo" style="max-width:900px">
    <!-- Card Header - Accordion -->
    <div class="card-header py-2 card-body bg-gradient-primary align-middle" style="min-height: 2.5rem;">               
        <span class="h6 m-0 font-weight text-white">Cadastro de processo</span>
    </div>                  
    <!-- Card Content - Collapse -->
    <div class="card-body">
        <form id="form_cadastro" action="save_processo.php" method="post">
            <input type="hidden" id="id" name="id"/>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control form-control-sm" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                <label for="inputPassword4">Senha</label>
                <input type="password" class="form-control form-control-sm" id="inputPassword4" placeholder="Senha">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Endereço</label>
                <input type="text" class="form-control form-control-sm" id="inputAddress" placeholder="Rua dos Bobos, nº 0">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Endereço 2</label>
                <input type="text" class="form-control form-control-sm" id="inputAddress2" placeholder="Apartamento, hotel, casa, etc.">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputCity">Cidade</label>
                <input type="text" class="form-control form-control-sm" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                <label for="inputEstado">Estado</label>
                <select id="inputEstado" class="form-control form-control-sm">
                    <option selected>Escolher...</option>
                    <option>...</option>
                </select>
                </div>
                <div class="form-group col-md-2">
                <label for="inputCEP">CEP</label>
                <input type="text" class="form-control form-control-sm" id="inputCEP">
                </div>
            </div>

            <div class="form-group row float-right">
                <button type="reset" data-toggle="collapse" data-target="#form_processo" class="btn btn-danger btn-sm"><i class="fa fa-minus-square"></i> Cancelar</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Salvar</button>
                &nbsp;&nbsp;&nbsp;
            </div>
        </form>                  
    </div>
</div>
<!-- /.container-fluid -->

