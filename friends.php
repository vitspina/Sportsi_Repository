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

<table border = 0 width = 50% bgcolor="gray">
		<?php 
		$user = $_SESSION["$email"];
		$verifica_amigos="SELECT * FROM user_friends where fri_user = '$email' and fri_fback = true";
		$query = mysql_query($verifica_amigos);
		if(mysql_num_rows($query) > 0){
			while($verifica_amigos = mysql_fetch_array($query)){
				$nomeAmigo = $verifica_amigos["fri_friend"];

				// Desenha a linha
				echo "<tr>";
				echo "<td>$nome</td>";
				echo "</tr>";
			}
		}
		else{
			echo "Você não tem amigos, que pena !";
		}
		?>
</table>


<div id="footer">
Copyright © Sportsi™ Registered Mark BLABLABLA
</div>

</body>
</html>