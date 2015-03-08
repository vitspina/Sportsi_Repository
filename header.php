<?php
//Starts
ob_start();

if (!isset($_SESSION))
  {
    session_start();
  }
//Globais
$home="http://localhost/index.php";
$title="Sportsi";
$startaction="";
$msg="";
if(isset($_GET["acao"])){
	$acao=$_GET["acao"];
	$startaction=1;
}
if( ! ini_get('date.timezone') )
{
    date_default_timezone_set('GMT');
}
?>