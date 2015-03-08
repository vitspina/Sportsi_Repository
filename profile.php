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
		

		$user = $_SESSION["email"];
		$verifica_info="SELECT * FROM user_detailedinfo where user_email = '$user'";
		$query = mysql_query($verifica_info);
		while($verifica_info = mysql_fetch_array($query)){
			$nome = $verifica_info["user_name"];
			$email = $verifica_info["user_email"];
			$ctry = $verifica_info["user_ctry"];
			$state = $verifica_info["user_estado"];
			$city = $verifica_info["user_city"];
			$gender = $verifica_info["user_sexo"];
			$age = $verifica_info["user_idade"];
		}
		?>
<center><table border =1 width=95%>
	<tr>
		<td>ASDASD
		</td>
		<td width="140px" height="160px"> <center> FOTO
		</td>
		<td>ASDASD
		</td>
	</tr>
		<tr>
		<td width="44%">	
			<table border=1 width="100%" height="100%">
				<tr>
					<td bgcolor="#D3D3D3" width=100%><center>
							<?php echo $nome; ?>
					</td>
				</tr>
				<tr>
					<td height="100%">
					</td>
				</tr>
			</table>
		</td>
		<td>
		<table border=0>
			<tr><td bgcolor="#D3D3D3" width="12%"><center>Email</td></tr>
			<?php 
				echo "<tr><td>$email</td></tr>"; 
			?>
			<tr><td bgcolor="#D3D3D3"><center>País</td></tr>
			<?php 
				echo "<tr><td>$ctry</td></tr>"; 
			?>
			<tr><td bgcolor="#D3D3D3"><center>Estado</td></tr>
			<?php 
				echo "<tr><td>$state</td></tr>"; 
			?>
			<tr><td bgcolor="#D3D3D3"><center>Cidade</td></tr>
			<?php 
				echo "<tr><td>$city</td></tr>"; 
			?>
			<tr><td bgcolor="#D3D3D3"><center>Sexo</td></tr>
			<?php 
				echo "<tr><td>$gender</td></tr>"; 
			?>
			<tr><td bgcolor="#D3D3D3"><center>Idade</td></tr>
			<?php 
				echo "<tr><td>$age</td></tr>"; 
			?>
		</table>
		</td>
		<td width="44%">ASDASD
		</td>
	</tr>
</table>

<div id="footer">
Copyright © Sportsi™ Registered Mark BLABLABLA
</div>

</body>
</html>