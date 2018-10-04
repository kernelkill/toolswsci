<?php 
	require ("db.php");

	$nome = $_POST['inputNome'];
	$senha = $_POST['inputPassword'];

	$query = mysqli_query($conn,"SELECT * FROM usuarios WHERE nome = '$nome' AND senha = '$senha'");
	$row = mysqli_num_rows($query);

	if ($row > 0){
		session_start();
		$_SESSION['nome'] = $_POST['inputNome'];
		$_SESSION['senha'] = $_POST['inputPassword'];
		header('Location: dashboard.php');
	}else{
		header('Location: index.php?msg=1');
	}
?>