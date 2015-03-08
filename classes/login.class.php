<?php

	class Login{
		public function logar($email,$password){
			$buscar=mysql_query("SELECT * FROM user_login WHERE usu_email='$email' AND usu_passw='$password' LIMIT 1");
			if(mysql_num_rows($buscar) ==1){
				$dados=mysql_fetch_array($buscar);

				$_SESSION["email"]=$dados["email"];
				$_SESSION["password"]=$dados["password"];
				$_SESSION["nome"] = $dados["usu_name"];
				
				setcookie("logado",1);
				$log=1;
			}
				if(isset($log)){
						$ver_first_login = "SELECT usu_ctry, usu_name FROM user_login WHERE usu_email='$email' AND usu_passw='$password' LIMIT 1";
						$query = mysql_query($ver_first_login);
							while($ver_first_login = mysql_fetch_array($query)){
								$_SESSION["country"] = $ver_first_login["usu_ctry"];
							}
						$_SESSION["email"] = $email;
						$_SESSION["nome"] = $dados["usu_name"];


						if($_SESSION["country"] !== "FIRST"){
							$flash="Você foi logado com sucesso!";
							$logado = 1;
							$_SESSION["logado"] = 1;

							echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php'>";
							//include("main_feed.php");
						}else{
							echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=big_configs.php'>";
							$flash="Primeiro Login !!";
						}
					
				}
				else{
					$flash="Something got wrong!";
				}
				echo $flash;
		}
	}
?>