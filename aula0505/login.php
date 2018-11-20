<?php 

$error = "";

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {

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
    die("Falha ao conectar: " . $conn->connect_error);
  } 

  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE email = '".$email."' AND password = '".$password."'";
  $result = $conn->query( $sql );

  if ( $result->num_rows > 0 ) {

    $error = "Acesso liberado.";
    session_start();
    $_SESSION['email']= $email;
    header("location: index.php");

  } else {

    $error = "Dados inválidos, tente novamente.";

  }
  $conn->close();

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
  <title>Cadastrar Usuário</title>
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
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="POST" action="login.php">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">

                <label for="exampleInputEmail1">Email</label>
                <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp"  name="email">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="password">Senha</label>
                <input class="form-control" id="password" name="password">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
          <a href="index.php"class="btn btn-info">Retornar</a>
          <span><?php echo $error; ?></span>
        </form>
    <!--     <div class="text-center">
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
