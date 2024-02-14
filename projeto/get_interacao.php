<?php
	include_once('actions/ManterInteracao.php'); 
    include_once('actions/ManterUsuario.php'); 
	
	$manterInteracao = new ManterInteracao();
    $manterUsuario = new ManterUsuario();
	
	$lista = $manterInteracao->listar($id_chamado);
        
    foreach ($lista as $obj) {
        echo '<div class="bd-callout bd-callout-warning">';
        echo '<h5 id="titulo_interacao">'.$manterUsuario->getUsuarioPorId($obj->usuario)->nome.'</h5>';
        echo '<p>'.$obj->texto.' <br/><code class="highlighter-rouge">'.$obj->data.'</code>.</p>';
        echo '</div>';
    }

