<?php
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$idade = $_POST['idade'];
	$email = $_POST['email'];
	$necessidade = $_POST['necessidade'];

	if(!$nome || !$sobrenome || !$idade || !$email || !$necessidade ){
		echo "Você precisa preencher todos os campos!";
		exit;
	}

	$dbcon = new mysqli("localhost","root","","bd_atvdd");

	if($dbcon->connect_error){
		die("Erro('.$dbcon->connect_errno.')".$dbcon->connect_error);
	}else{
		$sql = "INSERT INTO cadastro VALUES ('".$nome."','".$sobrenome."','".$idade."','".$email."','".$necessidade."')";

		if($dbcon->query($sql)){
			echo "Cadastro realizado com sucesso!";
		}

		$dbcon->close();
	}
?>