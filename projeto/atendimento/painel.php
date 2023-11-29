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

        <title>Atentimento - GDF Saúde - Painel</title>

        <!-- Custom fonts for this template-->
        <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        
        <link rel="shortcut icon" href="../favicon.ico" />
        <!------ Include the above in your HEAD tag ---------->

        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="lib/jquery-3.3.1.min.js"></script>
        <script src="lib/scripts.js"></script>
        <style>
            body{
                font-size: small;
            }
        </style>
    </head>

<body>
	<div class="barraTop">&nbsp;</div>
	<div class="container page">
		<div class="row barraSuperior">
			<div class="col-xs-1">
				<img src="imagens/logogdfsaude.png" class="uespiLogo">
			</div>
			<div class="col-xs-11" style="text-align: right;"><p></p>
				<span class="uespiTexto">Atendimento GDF Saúde</span><br>
				<span class="subtitulo">Unidade -  <strong>Plano Piloto</strong></span>
			</div>
		</div>
		<div class="row">
			<div class="senhaAtual">
				<div class="row">
					<div style="text-align: center;"><br><br>
						<span class="senhaAtualTexto">Maria da Silva &nbsp;</span>
					</div>
                </div>
                <div class="row">
					<div style="text-align: center;">
						<span id="senhaAtualNumero">Guichê 02</span>
					</div>
					<input type="hidden" id="senhaNormal" value="0000">
					<input type="hidden" id="senhaPrioridade" value="P000">
				</div>
			</div>
		</div>
		<div class="row row gx-4 gx-lg-5">
			<div class="col-md-4 mb-5  ultimaSenha">
				<span class="ultimaSenhaTitulo">ÚLTIMA CHAMADA</span><br>
				<span id="ultimaSenhaTexto">Manuel Martins Pereira </span><br>
				<span id="ultimaSenhaNumero">Guichê 03</span>
			</div>
            <div class="col-md-4 mb-5  ultimaSenha">
				<span class="ultimaSenhaTitulo">PENÚLTIMA CHAMADA</span><br>
				<span id="ultimaSenhaTexto">Paula Antunes de Almeida </span><br>
				<span id="ultimaSenhaNumero">Guichê 01</span>
			</div>
            <div class="col-md-4 mb-5  ultimaSenha">
				<span class="ultimaSenhaTitulo">ANTEPENÚLTIMA CHAMADA</span><br>
				<span id="ultimaSenhaTexto">Manuel Martins Pereira </span><br>
				<span id="ultimaSenhaNumero">Guichê 03</span>
			</div>
		</div>
	</div>
	<audio id="audioChamada" src="audio/chamada.wav"></audio>
</body>
</html>