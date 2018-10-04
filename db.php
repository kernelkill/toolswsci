<?php 
	$host = "localhost";
	$user = "teste";
	$pass = "teste123";
	$banco = "wscitools";

	$conn = mysqli_connect($host, $user, $pass, $banco);

	if ($conn->connect_error){
		die ("Falha na conexão: ". $conn->connect_error);
	}
 ?>