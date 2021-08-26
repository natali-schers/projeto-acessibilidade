<?php
	$dbcon = new mysqli("localhost","root","","bd_atvdd");

	if($dbcon->connect_error){
		die('Erro('.$dbcon->connect_errno.')'.$dbcon->connect_error);
	}else{
		$sql = "SELECT * FROM cadastro";

		$resultado = mysqli_query($dbcon,$sql);
		echo "<h2>Cadastros</h2>";
		while ($cadastro = mysqli_fetch_array($resultado)){
			echo "Nome: " . $cadastro['nome']. "<br />Sobrenome:  " . $cadastro['sobrenome'] . "<br />Idade: " . $cadastro['idade'] . "<br />Email: " . $cadastro['email'] . "<br />Necessidade: " . $cadastro['necessidade'] . "<hr>";
		}
		mysqli_close($dbcon);
	}

?>