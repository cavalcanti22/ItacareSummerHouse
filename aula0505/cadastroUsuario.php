<?php 
session_start();
if( !isset( $_SESSION['email'] ) ){
    header("location: login.php");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include 'conn.php';

    $sql = "INSERT INTO users (email, password) VALUES ('".$_POST['email']."', '".$_POST['psw']."')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['feedback'] = '<div class="alert alert-success" role="alert">USUÁRIO CADASTRADO COM SUCESSO!</div>';
        header("location: listaUsuarios.php");
        echo "<br>";
        echo $_SESSION['feedback'];
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;

    }

    $conn->close();
}
?>

