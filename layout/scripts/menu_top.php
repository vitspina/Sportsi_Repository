<?php
error_reporting(0);
 session_start();
?>
<html>
<!--##########################MENU TOPO FEED############################-->
	<div id="menu" style="width:100%;">
	<ul> 
    <li><font color="white"><a href="/main_feed.php"><b>FEED<?php  echo $_SESSION["email"];?></a></li> 
	<li><a href="profile.php">Perfil</a>
	</li> 
	<li><a href="/category.php"><b>Categorias</a></li> 
    <li><a href="#">Opções</a>
	<ul> 
        <li><a href="#">Deletar Conta(*)</a></li> 
		<li><a href="/logout.php?">SAIR</a></li> 
      </ul> 
    </li>
      
  </ul>
</div>
<br>
</html>