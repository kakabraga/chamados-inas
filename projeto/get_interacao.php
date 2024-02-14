<?php
	include_once('actions/ManterInteracao.php'); 
    include_once('actions/ManterUsuario.php'); 
	
	$manterInteracao = new ManterInteracao();
    $manterUsuario = new ManterUsuario();
	
	$lista = $manterInteracao->listar($id_chamado);
        
    foreach ($lista as $obj) {
        $class_color = "border-left-primary";
        if($obj->usuario != $chamado->usuario){
            $class_color = "border-right-warning";
        }
        ?>
        <div class="col-xl-3 col-md-6 mb-4" style="max-width: 720px;" >
            <div class="card <?=$class_color ?> shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <h5 id="titulo_interacao"><?=$manterUsuario->getUsuarioPorId($obj->usuario)->nome ?></h5>
                        <p><?=$obj->texto ?><br/><code class="highlighter-rouge"><?=date('d/m/Y h:i', strtotime($obj->data)) ?></code>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

