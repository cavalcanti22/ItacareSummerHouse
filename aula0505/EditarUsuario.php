<?php
session_start();
if( !isset( $_SESSION['email'] ) ){
    header("location: login.php");
}

$name = "";
$p = "";

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

    $sql = "SELECT * FROM users WHERE id = ".$userId;
    $result = $conn->query( $sql );

    if ( $result->num_rows > 0 ) {

            // Saida de cada linha do Banco de Dados
        while( $row = $result->fetch_assoc() ) {

            $email = $row["email"];
            $p = $row["password"];

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

        $sql = "DELETE FROM users WHERE id = '".$uid."'";

        if ($conn->query($sql) === TRUE) {
            $displayForm = "display:none";
            $_SESSION['feedback'] = '<div class="alert alert-danger" role="alert">USUÁRIO EXCLUÍDO COM SUCESSO!</div>';
            header('Location: listaUsuarios.php');

        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
            $displayForm = "display:none";
        }

    } else {

        $sql = "UPDATE users SET email = '".$_POST['email']."', password = '".$_POST['psw']."' WHERE id = '".$uid."'";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['feedback'] = '<div class="alert alert-info" role="alert">USUÁRIO ATUALIZADO COM SUCESSO!</div>';
            $displayForm = "display:none";
            header('Location: listaUsuarios.php');

        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
            $displayForm = "display:none";
        }

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
  <title>Editar Usuário</title>
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
        <div class="card-header">Editar Usuário</div>
        <div class="card-body">
            <form method="POST" action="EditarUsuario.php">
                <input type="hidden" name="id" value="<?php echo $userId ?>">

                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp"  name="email" value="<?=$email?>">
                </div>
                <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-6">
                        <label for="exampleInputPassword1">Senha</label>
                        <input class="form-control" id="exampleInputPassword1" name="psw" value="<?=$p ?>">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="listaUsuarios.php"class="btn btn-info">Retornar</a>
        </form>

        <form action="EditarUsuario.php" method="POST" style="<?php echo $displayForm ?>">

            <div class="container">

                <input type="hidden" name="id" value="<?php echo $userId ?>">
                <input type="hidden" name="excluir" value="<?php echo true ?>">

                <div class="clearfix">
                    <button type="submit" class="btn-danger pull-right">Excluir Usuário</button>
                </div>

            </div>

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

<!-- ------------------------------------------------------- -->

