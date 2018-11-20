<?php 
session_start();
if( !isset( $_SESSION['email'] ) ){
	header("location: login.php");
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	include 'conn.php';

	$sql = "INSERT INTO employees (name, email, rg, cpf, birthday, job, payment) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['rg']."', '".$_POST['cpf']."', '".$_POST['birthday']."', '".$_POST['job']."', '".$_POST['payment']."')";

	if ($conn->query($sql) === TRUE) {
		header("location: listaFuncionarios.php");
		$_SESSION['feedback'] = '<div class="alert alert-success" role="alert">FUNCIONÁRIO CADASTRADO COM SUCESSO!</div>';
		echo "<br>";
		echo $_SESSION['feedback'];

	} else {
		echo "Erro: " . $sql . "<br>" . $conn->error;

	}

	$conn->close();
}
?>
