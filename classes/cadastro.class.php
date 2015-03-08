<?php

	class Cadastro{
		public function cadastrar($name, $email, $password){
		//Tratamento das variсveis
		$name = ucwords(strtolower($name));
		//$email = ucwords(strtolower($email));
		//$password=md5($password."sportsi".date("d/m/Y/h/i/s/H"));
		$password=sha1($password."user_login");
		
		//Inserчуo no banco de dados
		
		//Verifica se email ja existe na tabela
		$validaremail=mysql_query("SELECT * FROM user_login WHERE usu_email='$email'");
		$contar=mysql_num_rows($validaremail);
		if($contar == 0){ // Se nao existir, entra aqui e insere
			$insert=mysql_query("insert into user_login(usu_email,usu_name,usu_passw,usu_ctry) values('$email','$name','$password', 'FIRST')");
			$flash="Cadastro Realizado com Sucesso !";
			
			//Apenas para "certeza", verifica se email existe na tabela detalhada.
			$valida_detailed=mysql_query("SELECT * FROM user_detailedinfo WHERE user_email='$email'");
			$contar_detailed = mysql_num_rows($valida_detailed);
			if($contar_detailed == 0){ // Se nao existir, entra aqui e insere
				$insert_detailed=mysql_query("insert into user_detailedinfo(user_email, user_name, user_ctry, user_estado, user_city, user_mainSPORTS, user_hobbSPORTS, user_sexo, user_idade, user_id) values('$email','$name', '', '', '', 0, 0, '', 0, '')");
				$flash="Cadastro realizado com sucesso.";
			}
			else{ // Se existir, avisa e sai.
				$flash="Jс existe um usuсrio cadastrado com esse email ! ERRO";
			}
		}else{ // Se existir, avisa e sai.
			$flash="Jс existe um usuсrio cadastrado com esse email ! ERRO";
		}

		
		if($flash ==""){
			$flash="Ops! Houve um erro.";
		}
			
		//Retorno para o usuсrio
		echo $flash;
		}
		public function cad_nat($email, $nat, $spo){
			try{
				echo($spo);
				echo($nat);
				echo($email);
		//Inserчуo no banco de dados
		
			$update=mysql_query("update user_login set usu_ctry = '$nat' WHERE usu_email='$email'");
			$update_detailed= mysql_query("update user_detailedinfo set user_ctry = '$nat' WHERE user_email='$email'");
			$update_sports=mysql_query("update spo_sports set spo_qtdparticipantes = spo_qtdparticipantes + 1 WHERE spo_id ='$spo'");
			
			$insert=mysql_query("insert into spo_usercad (spou_email, spou_id, spou_tipo) values ('$email', '$spo', 1)");
			}
			catch(Exception $e){
				echo("Erro na classe CADASTRO_CLASS");
			}

		}
	}
		
?>