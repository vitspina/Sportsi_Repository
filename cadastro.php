
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Formulário Cadastro</title>
</head>
 
<body>
<div id="login" class="bradius">
<div class="message" style="color:red;"><?php if(isset($flash)){
									echo $flash;
										}
									?>
			</div>

<div class="acomodar">
<section id="content">
			<form action="?acao=cadastrar2" method="post">
								<table id="todoform">    
									<tr>       
										<th colspan="2"><center>Preencha os Campos Abaixo:</th>    
									</tr>    
									<tr>       
										<td><label for ="nome"><b>Nome Completo</label><input id="name" type="text" class="txt bradius" name="name" value="" />
									</td>										
									</tr> 
									<tr>       
										<td><label for ="email"><b>Email</label><input id="email" type="text" class="txt bradius" name="email" value="" />
									</td>										
									</tr> 
									<tr>       
										<td><label for ="password"><b>Senha</label><input id="password" type="password" class="txt bradius" name="password" value="" />
									</tr>								
								</table>
										<input type="submit" class="sb bradius" value="Entrar" onclick="validar()"; />
									</fieldset>						
			</form>
							</div>
							</div>
</body>
</html>
