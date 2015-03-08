<?php
error_reporting(0);
?>
<!doctype html>
<html lang= "pt-br">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title> Sportsi </title>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/hivebutton.css" />
</head>

<body bgcolor = "#E8E8E8">
<div id="header">
	<b>Your social network! Blablabla
</div>
<div id="div_geral">

			<!--<div id="interior_esq_top">	-->
			<br>	
			<br>
			<br>
					<div id="hexagon" style="position:absolute; top:10%; left:1%;"><center><img src="images/img_icons/futebol.png" width = 55 height= 55 /></div>
					<div id="hexagon" style="position:relative; top:0; left:120;"><center><img src="images/img_icons/bike.png" width = 55 height= 55 /></div>
					<div id="hexagon" style="position:relative; top:-20; left:230;"><center><img src="images/img_icons/baseball.png" width = 55 height= 55 /></div>
					<div id="hexagon" style="position:relative; top:-10; left:330;"><center><img src="images/img_icons/karate.png" width = 55 height= 55 /></div>
					<div id="hexagon" style="position:relative; top:-30; left:440;"><center><img src="images/img_icons/snowboard.png" width = 55 height= 55 /></div>
					<div id="hexagon" style="position:relative; top:-180; left:550;"><center><img src="images/img_icons/futebol.png" width = 55 height= 55 /></div>
			<!--</div> -->
		<center> ------ 
		
		
							<style type="text/css">
							</style>
							<div id="div_login">
								<div id="topo">
								<form action="?acao=logar" method="post">
									<div style="position:absolute; top:1%; left:15%;width:90px; height:30px;" class="aba"><center><a class="link" href="index.php?acao=logar"><div id="aba_login"><label for ="Login"><b>Login</label></div></a></div>
								</form>	
								<form action="?acao=cadastrar" method="post">
									<div style="position:relative; top: 5; left: 0; width:90px; height:30px;" class="aba"><center><a class="link" href="index.php?acao=cadastrar"><div id="aba_cadastrar"><b>Cadastre-se &raquo;</div></a></div>
								</form>	
								</div>
								<div id="div_login2">
										<?php if ($acao == "logar" || $acao =="logar2") {
											include("login.php"); 
											}else{
											include("cadastro.php");
											}
										?>
								&nbsp;</div>
								&nbsp;
							</div>

		<div id="interior_esq_down">
		<br>..
					<div style="background-color:#FFFFFF;text-align:center;border-radius:10px;">
					Div teste
					</div>
		</div>

</div>

<div id="footer">
Copyright © Sportsi™ Registered Mark
</div>
<div class="clear"></div>
</body>
</html>