<?php
	$dbcon = mysqli_connect("localhost","root","","bd_atvdd");
	$sql = "CREATE TABLE cadastro(nome char(50), sobrenome char(50), idade int, email char(50), necessidade char(50))";
	if (mysqli_query($dbcon,$sql)){
		echo "Tabela criada com sucesso!";
	}else{
		echo "Erro: ".mysql_error($dbcon);
	}
	mysqli_close($dbcon);
?>