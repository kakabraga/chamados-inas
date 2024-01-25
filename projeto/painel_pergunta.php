<!DOCTYPE html>
<html>
<head>

</head>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Perquisa de atentimento - GDF Saúde - Painel</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        
        <link rel="shortcut icon" href="favicon.ico" />
        <!------ Include the above in your HEAD tag ---------->

        <link href="atendimento/css/bootstrap.css" rel="stylesheet">
        <link href="atendimento/css/style.css" rel="stylesheet">
        <script src="atendimento/lib/jquery-3.3.1.min.js"></script>
        <style>
            body{
                font-size: small;
            }
			.box {
				display: flex;
				align-items: stretch;
			}
        </style>
    </head>

<body>
	<div class="barraTop">&nbsp;</div>
	<div class="container page">
		<div class="row barraSuperior">
			<div class="col-xs-1">
				<img src="atendimento/imagens/logogdfsaude.png" class="logo">
			</div>
			<div class="col-xs-11" style="text-align: right;"><p></p>
				<span class="uespiTexto">Atendimento GDF Saúde</span><br>
				<span class="subtitulo">Unidade -  <strong>Plano Piloto</strong></span>
			</div>
		</div>
		<?php
		include_once('./actions/ManterPergunta.php'); 
		include_once('./dto/Pergunta.php'); 

		$manterPergunta = new ManterPergunta();
		$filtro = " WHERE p.status=1 ";
		$lista = $manterPergunta->listar($filtro);

		$ordem = isset($_REQUEST['ordem']) ? $_REQUEST['ordem'] : 0;
		$total = count($lista);
		//echo "Total: " . $total . " Ordem: " . $ordem;
		if ($total > $ordem) {
			$pergunta = $lista[$ordem];
		?>
			<div class="row">
				<div style="border: 1px;">
					<div class="row">
					<br/><br/>
					<h1 class="u-text u-text-1" style="color: #0C4BAC; text-align: center; font-size: 38px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">
						<?=$pergunta->descricao ?>
					</h1><br/><br/>
					</div>
					<div class="row">
						<div style="text-align: center;" class="box">
							<div>
								<a href="registrar_nota.php?nota=1&id=<?=$pergunta->id ?>&ordem=<?=$ordem ?>"><img src="img/nota1.svg"  alt="Nota 1"  width="140"></a> &nbsp;&nbsp; 
								<br/>
								MUITO RUIM
							</div>	
							<div>
								<a href="registrar_nota.php?nota=2&id=<?=$pergunta->id ?>&ordem=<?=$ordem ?>"><img src="img/nota2.svg"  alt="Nota 2"  width="160"></a> &nbsp;&nbsp; 
								<br/>
								RUIM
							</div>	
							<div>
								<a href="registrar_nota.php?nota=3&id=<?=$pergunta->id ?>&ordem=<?=$ordem ?>"><img src="img/nota3.svg"  alt="Nota 3"  width="140"></a> &nbsp;&nbsp; 
								<br/>
								REGULAR
							</div>	
							<div>
								<a href="registrar_nota.php?nota=4&id=<?=$pergunta->id ?>&ordem=<?=$ordem ?>"><img src="img/nota4.svg"  alt="Nota 4"  width="160"></a> &nbsp;&nbsp; 
								<br/>
								BOM
							</div>	
							<div>
								<a href="registrar_nota.php?nota=5&id=<?=$pergunta->id ?>&ordem=<?=$ordem ?>"><img src="img/nota5.svg"  alt="Nota 5"  width="140"></a> &nbsp;&nbsp; 
								<br/>
								ÓTIMO
							</div>	
						</div>
					</div>
				</div>
			</div><br/><br/>
		<?php
		} else {
			?>
			<div class="row">
				<div style="border: 1px;">
					<div class="row">
					<br/><br/><br/>
					<h1 class="u-text u-text-1" style="color: #0C4BAC; text-align: center; font-size: 38px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">
						FIM!! <img src="img/check.svg"  alt="Concluído"  width="100"><br/><br/><br/>
						OBRIGADO POR PARTICIPAR DA NOSSA PESQUISA!
						<script>
							setTimeout(function() {
								window.location.href = "painel_pergunta.php";
							}, 8000);
						</script>
					</h1>
					</div>
				</div>
			</div><br/><br/>			
			<?php
		}
		?>
	</div>
</body>
</html>