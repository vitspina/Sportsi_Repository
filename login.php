 <html>
		<div id="login" class="bradius">
			<div class="message" style="color:red;"><?php if(isset($flash)){
									echo $flash;
										}
									?>
			</div>
			
			<div class="acomodar">
				<form action="?acao=logar2" method="post">
				<label for ="email"><b>Email</label><input id="email" type="text" class="txt bradius" name="email" value="" />
				<label for ="password"><b>	Senha</label><input id="password" type="password" class="txt bradius" name="password" value ="" />
				<input type="submit" class="sb bradius" value="Entrar" />
			<!--acomodar-->
			</div>
			</div>
			<!--login-->
 </html>