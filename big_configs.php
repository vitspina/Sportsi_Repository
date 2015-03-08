<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Sportsi </title>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/hivebutton.css" />
<?php 
session_start();
include("classes/cadastro.class.php");
include("conexao.php");


//Conexão com banco de dados
$conectar = new DB;
$conectar=$conectar->conectar();

	if(isset($_GET["nat"])){
		if($_GET["nat"] == 1){
			$nac = $_POST["nacionalidade"];
			$spo = $_POST["esportes"];
			$email =$_SESSION["email"];
						
			$class = new Cadastro();
			$class=$class->cad_nat($email, $nac, $spo); // Chama função para add nacionalidade
			
			echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=main_feed.php'>";
		}
	}
?>
</head>

<body bgcolor = "#E8E8E8">
<table border = 0 width = 100% height = 10%  bgcolor="#EDEDED" >
	<tr>
		<td width = 80%><b><center>Your sports home and social network</td>
		
		<td >
			<a href="/logout.php?"><big><b>Sair</a>
			
		</td>
	</tr>
</table>
<br>
<div id="div_configs">
  	<h1> Primeiro, alguns passos:</h1>
<br>
<br><center>
<form action="?nat=1" method="post">
<table border =0>
<tr>
	<td><h1>
		<?php
		include("paises/paises.php");
		?></h1>
	</td>
</tr>
<tr>
	<td>
	 Escolha seu esporte principal:
	 <select class="form-control" name="esportes" style="height:80px;">
	 		<?php 
		$verifica_categorias="SELECT * FROM spo_sports";
		$query = mysql_query($verifica_categorias);
		while($verifica_categorias = mysql_fetch_array($query)){
			$nome = $verifica_categorias["spo_desc"];
			$id = $verifica_categorias["spo_id"];
			$qtdpart = $verifica_categorias["spo_qtdparticipantes"];
			// Desenha a option
			echo "<option value=$id>$nome</option>";
		}
		?>
		</select>
	</td>
</tr>
<tr>
	<td>
	 <center><input type="submit" class="sb bradius" value="Próximo" />
	</td>
</tr>
</table>	
</form>
</center>
<div class="circle">1</div>
</div>

<div id="footer">
Copyright © Sportsi™ Registered Mark BLABLABLA
</div>

</body>
</html>