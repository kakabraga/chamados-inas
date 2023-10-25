<?php
ob_start();
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

///CHEGA USUARIO PREENCHIDO, CONSTROI O OBJETO  E CHECA O USUARIO E SENHA///
if (($usuario!="") && ($senha!="")){
			include ("LdapAd.php");
		    $adldap = new adLDAP();
		if ($adldap->authenticate($usuario,$senha)){

//////SE TIVER TUDO CORRETO PEGA OS GRUPOS DO USUARIO
$grupo = $adldap->user_groups("$usuario");

  print_r($grupo);
  echo "<h2><font color=blue>USUÁRIO CONECTADO COM SUCESSO!</font></h2>";
			exit;
  
  }
   
  else{ 
echo "<h2><font color=ff0000>USUÁRIO OU SENHA INVÁLIDOS</font></h2>";

}
		
}

?>

<html>
<body>
  <form name="frm" method="post" >
&nbsp;&nbsp;&nbsp;<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td colspan="3"><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PREENCHA SEU USUÁRIO E SENHA DA REDEB </b>
		</td>
	</tr>
	<tr>
		<td width="13%">&nbsp;</td>
		<td width="54%">&nbsp;</td>
		<td width="33%">&nbsp;</td>
	</tr>
	<tr>
		<td width="13%" align="right"><b><font size="2">Usuário:&nbsp;&nbsp;&nbsp;
		</font></b></td>
		<td width="54%"> <input type="text" name="usuario"  size="25" maxlength="25"></td>
		<td width="33%">&nbsp;</td>
	</tr>
	<tr>
		<td width="13%" align="right">&nbsp;</td>
		<td width="54%">&nbsp;</td>
		<td width="33%">&nbsp;</td>
	</tr>
	<tr>
		<td width="13%" align="right"><b><font size="2">Senha:&nbsp;&nbsp;&nbsp;&nbsp;
		</font></b></td>
		<td width="54%"> <input type="password" name="senha"  size="16" maxlength="16"></td>
		<td width="33%">&nbsp;</td>
	</tr>
	<tr>
		<td width="13%" align="right">&nbsp;</td>
		<td width="54%">&nbsp;</td>
		<td width="33%">&nbsp;</td>
	</tr>
	<tr>
		<td width="13%" align="right">&nbsp;</td>
		<td width="54%"><input type="submit" name="Submit" value="VERIFICAR" ></td>
		<td width="33%"></form></td>
	</tr>
</table>

</body>
</html>
<?
	ob_end_flush();
?>
