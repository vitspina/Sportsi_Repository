<?php
include("header.php");
if(isset($_SESSION["logado"])){   // Sessão já criada
//echo "SESSAO ABERTA{$_SESSION["logado"]}";
	if($_SESSION["logado"] == 1){ // se a sessão já está Logada !
		include("main_feed.php");
	}	
}
else{
		include("consistencias.php");
		include("ini_page.php");
	}

if( ! ini_get('date.timezone') )
{
    date_default_timezone_set('GMT');
}
$a1="";
?>
