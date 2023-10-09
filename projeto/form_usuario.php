<!-- Begin Page Content -->

<!-- Collapsable Form -->
<div class="card mb-4 collapse hide border-box" id="form_usuario" style="max-width:850px">
    <!-- Card Header - Accordion -->
    <div class="card-header py-2 card-body bd-titulo align-middle" style="min-height: 2.5rem;">               
        <span class="h6 m-0 font-weight text-white">Cadastro de Usuário</span>
    </div>
    <!-- Card Content - Collapse -->
    <div class="card-body">
        <form id="form_cadastro" action="save_usuario.php" method="post" onsubmit="return valida_form();">
            <input type="hidden" name="altera" id="altera" value="0"/>
            <div class="form-group row">
                <label for="matricula" class="col-sm-2 col-form-label">Matrícula:</label>
                <div class="col-sm-10">
                    <input type="text" name="matricula" class="form-control form-control-sm" id="matricula" placeholder="matrícula" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
                <div class="col-sm-10">
                    <input type="text" name="nome" class="form-control form-control-sm" id="nome" placeholder="Nome" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="setor" class="col-sm-2 col-form-label">Setor:</label>
                <div class="col-sm-10">
                    <select id="setor" name="setor" class="form-control form-control-sm" required>
                        <option value="">Selecione</option>    
                    </select>
                </div>
            </div> `
            <div class="form-group row">
                <label for="perfil" class="col-sm-2 col-form-label">Perfil:</label>
                <div class="col-sm-10">
                    <select id="perfil" name="perfil" class="form-control form-control-sm" required>
                        <option value="">Selecione</option>    
                    </select>
                </div>
            </div> 
            <!-- CAMPO SENHA -->
            <div class="form-group row">
                <label class="col-sm-2 col-form-label text-right" for="cad_senha">Senha:<span class="star"> *</span></label>
                <div class="col-sm-10">
                    <input class="form-control form-control-sm" type="password" id="cad_senha" name="senha" maxlength="12" placeholder="Digite de 6 a 12 caracteres!" onblur="validaSenha()" onkeypress="if (event.keyCode == 13) {
                                return false;
                            }">
                    <span class="invalid-feedback" id="erro_senha" style="display: none;">Digite de 6 a 12 caracteres!</span>
                </div>
            </div>

            <!-- CAMPO CONFIRMAR SENHA -->
            <div class="form-group row">
                <label class="col-sm-2 col-form-label text-right" for="cad_confirma_senha">Confirma senha:<span class="star"> *</span></label>
                <div class="col-sm-10">
                    <input class="form-control form-control-sm" type="password" id="cad_confirma_senha" name="confirma_senha" maxlength="12" placeholder="Deixe em branco para não alterar" onblur="validaConfirmaSenha()" onkeypress="if (event.keyCode == 13) {
                                return false;
                            }">
                    <span class="invalid-feedback" id="erro_confirma_senha" style="display: none;">Atenção, as senhas não são iguais!</span>
                </div>
            </div>
            <div class="form-group row float-right">
                <button type="reset" onclick="$('#btn_cadastrar').show();" data-toggle="collapse" data-target="#form_usuario" class="btn btn-danger btn-sm"><i class="fa fa-minus-square"></i> Cancelar</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Salvar</button>
                &nbsp;&nbsp;&nbsp;
            </div>
        </form>                  
    </div>
</div>
<!-- /.container-fluid -->


