<?php
if($logado = 1){
	//include("main_feed.php");
}
//Include das classes
include("conexao.php");
include("classes/cadastro.class.php");
include("classes/login.class.php");

//Conexão com banco de dados
$conectar = new DB;
$conectar=$conectar->conectar();

//Método de cadastro
if($startaction == 1){
	if($acao=="cadastrar2"){
		$name=$_POST["name"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		
		if(empty($name) || empty($email) || empty($password)){
			$flash="Preencha todos os campos";
			//TODOS OS CAMPOS PREENCHIDOS
		}
		else{
		//EMAIL VALIDO
			if(filter_var($email,FILTER_VALIDATE_EMAIL)){
				if(strlen($password)<8){ // VER. SENHA
					$flash="Digite uma senha com no mínimo oito dígitos";
				}else
				{
					//Executa a classe de cadastro
					$conectar=new Cadastro;
					$conectar=$conectar->cadastrar($name,$email,$password);
				}
			}//EMAIL INVÁLIDO
			else{
				$flash="Formato do e-mail inválido";
			}
		}
	}
	//echo($flash); // Exibe mensagem no header
}
//Método de login
if($startaction == 1){
	if($acao=="logar2"){
	//Dados
	$email=$_POST["email"];
	$password=sha1($_POST["password"]."user_login");
	

	if(empty($email) || empty($password)){
		$flash="Preencha todos os campos!";
	}else{
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			$flash="Digite seu email corretamente";
		}else{
			//Executa busca pelo usuário

			$login=new Login;
			$emaild=$_SESSION["email"];
			$passwordd=$_SESSION["password"];
			$login=$login->logar($email,$password);
		}
	}
	}
}

//Método de checar user

if(isset($_SESSION["email"]) && isset($_SESSION["password"])){
	$logado=1;
	//echo "ESTÁ LOGADO";
}else{
	$logado=0;
	//echo "NAO está LOGADO";
}
?>