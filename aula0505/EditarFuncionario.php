<?php
session_start();
if( !isset( $_SESSION['email'] ) ){
    header("location: login.php");
}

$name = "";
$email = "";
$rg = "";
$cpf = "";
$birthdate = "";
$job = "";
$payment = "";

$displayForm = "";

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {

    $userId = $_GET['id'];

// $servername = "localhost";
  $servername = "ns320.hostgator.com.br";
// $username = "user";
  $username = "itaca014_dbteste";
// $password = "234";
  $password = "vitoria22";
  $dbname = "itaca014_teste";

        // Conectando com o BD:
    $conn = new mysqli($servername, $username, $password, $dbname);

        // Checando conexão:
    if ($conn->connect_error) {
        $displayForm = "display:none";
        die("Falha ao conectar: " . $conn->connect_error);
    } 

    $sql = "SELECT * FROM employees WHERE id = ".$userId;
    $result = $conn->query( $sql );

    if ( $result->num_rows > 0 ) {

            // Saida de cada linha do Banco de Dados
        while( $row = $result->fetch_assoc() ) {

            $name = $row["name"];
            $email = $row["email"];
            $rg = $row["rg"];
            $cpf = $row["cpf"];
            $birthdate = $row["birthday"];
            $job = $row["job"];
            $payment = $row["payment"];

        }

    } else {

        echo "Nenhum cadastro foi encontrado com este identificador.";
        $displayForm = "display:none";

    }
    $conn->close();

} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // $servername = "localhost";
  $servername = "ns320.hostgator.com.br";
// $username = "user";
  $username = "itaca014_dbteste";
// $password = "234";
  $password = "vitoria22";
  $dbname = "itaca014_teste";

    $uid = $_POST['id'];

        // Conectando com o BD:
    $conn = new mysqli($servername, $username, $password, $dbname);

        // Checando conexão:
    if ($conn->connect_error) {
        $displayForm = "display:none";
        die("Falha ao conectar: " . $conn->connect_error);
    }

    if( isset($_POST['excluir']) ) {

        $sql = "DELETE FROM employees WHERE id = '".$uid."'";

        if ($conn->query($sql) === TRUE) {
            $displayForm = "display:none";
            $_SESSION['feedback'] = '<div class="alert alert-danger" role="alert">FUNCIONÁRIO EXCLUÍDO COM SUCESSO!</div>';
            header('Location: listaFuncionarios.php');
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
            $displayForm = "display:none";
        }

    } else {

        $sql = "UPDATE employees SET name = '".$_POST['name']."', email = '".$_POST['email']."', rg = '".$_POST['rg']."', cpf = '".$_POST['cpf']."', birthday = '".$_POST['birthdate']."', job = '".$_POST['job']."', payment = '".$_POST['payment']."' WHERE id = '".$uid."'";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['feedback'] = '<div class="alert alert-info" role="alert">FUNCIONÁRIO ATUALIZADO COM SUCESSO!</div>';
            $displayForm = "display:none";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
            $displayForm = "display:none";
        }

        header('Location: listaFuncionarios.php');

    }


    $conn->close();

} else {
    $displayForm = "display:none";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Editar Funcionário</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <link rel="shortcut icon" href="user.png" type="image/x-icon" />
  
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Editar Funcionário</div>
      <div class="card-body">
        <form method="POST" action="EditarFuncionario.php">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <input type="hidden" name="id" value="<?php echo $userId ?>">

                <label for="exampleInputName">Nome</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" name="name" value="<?=$name;?>">
            </div>
            <div class="col-md-6">
                <label for="exampleInputLastName">Data de Nascimento</label>
                <input class="form-control" id="exampleInputLastName" type="date" aria-describedby="nameHelp" name="birthdate" value="<?=$birthdate;?>">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp"  name="email" value="<?=$email;?>">
    </div>

    <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label for="exampleInputPassword1">CPF</label>
            <input class="form-control" id="exampleInputPassword1" name="cpf" type="text" value="<?=$cpf;?>">
        </div>
        <div class="col-md-6">
            <label for="exampleConfirmPassword">RG</label>
            <input class="form-control" id="exampleConfirmPassword" name="rg" type="text" value="<?=$rg;?>">
        </div>
    </div>
</div>
<div class="form-group">
    <div class="form-row">
      <div class="col-md-6">
        <label for="exampleInputPassword1">Cargo</label>
        <input class="form-control" id="exampleInputPassword1" name="job" value="<?=$job;?>">
    </div>
    <div class="col-md-6">
        <label for="exampleConfirmPassword">Salário</label>
        <input class="form-control" id="exampleConfirmPassword" name="payment" value="<?=$payment;?>">
    </div>
</div>
</div>
<button type="submit" class="btn btn-primary">Atualizar</button>

<a href="listaFuncionarios.php"class="btn btn-info">Retornar</a>

</form>

<hr>

<form method="POST" action="EditarFuncionario.php">

    <input type="hidden" name="id" value="<?php echo $userId ?>">
    

    <input type="hidden" name="excluir" value="<?php echo true ?>">
    <button type="submit" class="btn btn-danger pull-right">Excluir Funcionario</button>
</form>

      <!--   <div class="text-center">
          <a class="d-block small mt-3" href="login.html">Login Page</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
      </div> -->
  </div>
</div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>
