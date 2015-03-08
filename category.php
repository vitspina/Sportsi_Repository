<?php 
include("conexao.php");


//Conexão com banco de dados
$conectar = new DB;
$conectar=$conectar->conectar();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Sportsi </title>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/hivebutton.css" />
</head>

<body bgcolor = "#E8E8E8">
<?php
		include("layout/scripts/menu_top.php");
		?>
<br>
<div class="CSSTableCateg">
<table border = 0 width = 50% bgcolor="white">
	<tr>
		<td width=80%>
			<center>Nome</center>
		</td>
		<td>
			<center>Quantidade de Participantes</center>
		</td>
		<?php 
		$verifica_categorias="SELECT * FROM spo_sports";
		$query = mysql_query($verifica_categorias);
		while($verifica_categorias = mysql_fetch_array($query)){
			$nome = $verifica_categorias["spo_desc"];
			$qtdpart = $verifica_categorias["spo_qtdparticipantes"];

			// Desenha a linha
			echo "<tr>";
			echo "<td>$nome</td>";
			echo "<td>$qtdpart</td>";
			echo "</tr>";
		}
		?>
	</tr>
</table>
</div>

<div id="footer">
Copyright © Sportsi™ Registered Mark BLABLABLA
</div>

</body>
</html>