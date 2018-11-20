<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Cadastrar Funcionário</title>
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
      <div class="card-header">Cadastrar Funcionário</div>
      <div class="card-body">
        <form method="POST" action="cadastroFuncionario.php">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Nome</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" name="name">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Data de Nascimento</label>
                <input class="form-control" id="exampleInputLastName" type="date" aria-describedby="nameHelp" name="birthday">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp"  name="email">
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">CPF</label>
                <input class="form-control" id="exampleInputPassword1" name="cpf" type="text">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">RG</label>
                <input class="form-control" id="exampleConfirmPassword" name="rg" type="text">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Cargo</label>
                <input class="form-control" id="exampleInputPassword1" name="job">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Salário</label>
                <input class="form-control" id="exampleConfirmPassword" name="payment" >
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
          <a href="index.php"class="btn btn-info">Retornar</a>
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
