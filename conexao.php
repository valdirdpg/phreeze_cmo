<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "clinicacmo";
	
	$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);

	// Seta a codificação do banco para resolver problema de acentuação dos dados
	$sql= "SET NAMES 'utf8'";
	mysqli_query($conn, $sql);
	$sql = 'SET character_set_connection=utf8';
	mysqli_query($conn, $sql);
	$sql ='SET character_set_client=utf8';
	mysqli_query($conn, $sql);
	$sql ='SET character_set_results=utf8';
	mysqli_query($conn, $sql);

?>