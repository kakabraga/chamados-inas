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
                <div class="form-group col-md-5">
                <label for="numero">Número</label>
                <input type="text" class="form-control form-control-sm" id="numero" placeholder="00000">
                </div>
                <div class="form-group col-md-4">
                <label for="sei">SEI</label>
                <input type="text" class="form-control form-control-sm" id="sei" placeholder="0000">
                </div>
                <div class="form-group col-md-3">
                <label for="autuacao">Autuação</label>
                <input type="date" class="form-control form-control-sm" id="autuacao">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control form-control-sm" id="cpf" placeholder="000000000-00">
                </div>
                <div class="form-group col-md-10">
                <label for="benaficiario">Beneficiário</label>
                <input type="text" class="form-control form-control-sm" id="benaficiario" placeholder="nome">
                </div>           
            </div>
            <div class="form-row">
                <div class="form-group col-md-7">
                <label for="assunto">Assunto</label>
                    <select id="assunto" name="assunto" class="form-control form-control-sm" required>
                        <option value="">Selecione</option>    
                    </select>
                </div>
                <div class="form-group col-md-5">
                <label for="senha">Senha</label>
                <input type="text" class="form-control form-control-sm" id="senha" placeholder="senha">
                </div>            
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                <label for="valor_guia">Valor da Guia</label>
                <input type="text" class="form-control form-control-sm" id="valor_guia" placeholder="000,00">
                </div>
                <div class="form-group col-md-2">
                <label for="valor_causa">Valor da Causa</label>
                <input type="text" class="form-control form-control-sm" id="valor_causa" placeholder="000,00">
                </div> 
                <div class="form-group col-md-2">
                <label for="deposito_judicial">Depósito Judicial</label>
                <input type="text" class="form-control form-control-sm" id="deposito_judicial" placeholder="000,00">
                </div>
                <div class="form-group col-md-2">
                <label for="reembolso">Reembolso</label>
                <input type="text" class="form-control form-control-sm" id="reembolso" placeholder="000,00">
                </div>            
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                <label for="custas">Custas</label>
                <input type="text" class="form-control form-control-sm" id="custas" placeholder="000,00">
                </div>
                <div class="form-group col-md-2">
                <label for="honorarios">Honorários</label>
                <input type="text" class="form-control form-control-sm" id="honorarios" placeholder="000,00">
                </div> 
                <div class="form-group col-md-2">
                <label for="multa">Multa</label>
                <input type="text" class="form-control form-control-sm" id="multa" placeholder="000,00">
                </div>
                <div class="form-group col-md-2">
                <label for="danos_morais">Danos Morais</label>
                <input type="text" class="form-control form-control-sm" id="danos_morais" placeholder="000,00">
                </div>            
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="liminar">liminar </label>
                    <select id="liminar" name="liminar" class="form-control form-control-sm" required>
                        <option value="">Selecione</option>    
                    </select>
                </div>
                <div class="form-group col-md-4">
                <label for="situacao">Situação Processual </label>
                    <select id="situacao" name="situacao" class="form-control form-control-sm" required>
                        <option value="">Selecione</option>    
                    </select>
                </div>            
            </div>  
            <div class="form-row mb-2">
                <div class="form-row w-100">
                <label for="id_liminar ">Observações </label>
                <textarea class="form-control form-control-sm" id="id_liminar" rows="5"></textarea><br/>
                </div>           
            </div>           
            <div class="form-group row float-right">
                <button type="reset" data-toggle="collapse" data-target="#form_processo" class="btn btn-danger btn-sm"><i class="fa fa-minus-square"></i> Cancelar</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-primary btn-sm mr-1"><i class="fas fa-save"></i> Salvar</button>
                &nbsp;&nbsp;&nbsp;
            </div>
        </form>                  
    </div>
</div>
<!-- /.container-fluid -->

