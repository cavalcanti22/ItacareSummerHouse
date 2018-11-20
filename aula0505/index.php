<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Home - Imagine School</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <link rel="shortcut icon" href="user.png" type="image/x-icon" />
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php 
  if (!isset($_SESSION['email']))
  {
   echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
   <a class="navbar-brand" href="index.php">Painel Administrativo</a>
   <a class="navbar-brand" href="login.php">Login Usuário</a>
   </nav>';

 }

 else
 {
  echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <a class="navbar-brand" href="index.php">Painel Administrativo</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
  <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Lista de Funcionários">
  <a class="nav-link" href="listaFuncionarios.php">
  <i class="fa fa-fw fa-table"></i>
  <span class="nav-link-text">Lista de Funcionários</span>
  </a>
  </li>
  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Lista de Usuários">
  <a class="nav-link" href="listaUsuarios.php">
  <i class="fa fa-fw fa-table"></i>
  <span class="nav-link-text">Lista de Usuários</span>
  </a>
  </li>
  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cadastro de Funcionários">
  <a class="nav-link" href="formFuncionario.php">
  <i class="fa fa-fw fa-link"></i>
  <span class="nav-link-text">Cadastro de Funcionários</span>
  </a>
  </li>
  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cadastro de Usuários">
  <a class="nav-link" href="formUsuario.php">
  <i class="fa fa-fw fa-link"></i>
  <span class="nav-link-text">Cadastro de Usuários</span>
  </a>
  </li>
  </ul>
  <ul class="navbar-nav sidenav-toggler">
  <li class="nav-item">
  <a class="nav-link text-center" id="sidenavToggler">
  <i class="fa fa-fw fa-angle-left"></i>
  </a>
  </li>
  </ul>
  <ul class="navbar-nav ml-auto">
  <li class="nav-item">
  <form class="form-inline my-2 my-lg-0 mr-lg-2">
  <div class="input-group">
  <input class="form-control" type="text" placeholder="Procurar...">
  <span class="input-group-append">
  <button class="btn btn-primary" type="button">
  <i class="fa fa-search"></i>
  </button>
  </span>
  </div>
  </form>
  </li>
  <li class="nav-item">
  <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
  <i class="fa fa-fw fa-sign-out"></i>Logout</a>
  </li>
  </ul>
  </div>
  </nav>';
}
?>
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Painel de Controle</a>
      </li>
      <?php 
      if (!isset($_SESSION['email']))
      {
        echo '<li class="breadcrumb-item active">Seja Bem - Vindo </li> ';
      }
      else {
        echo  ' <li class="breadcrumb-item active">'.'<i class="fa fa-fw fa-user"></i>Usuário: '.$_SESSION['email'].'</li> ' ;
      }
      ?>
    </ol>
    <!-- Area Chart Example-->
    <div class="card mb-3">

      <center>
        
        <?php 
        if (!isset($_SESSION['email']))
         {
          echo '<h3>Gerenciador de Funcionários e Usuários </h3><img  style="width: 50%;" src="func.png">';
        } 
        else
        {
          echo '<h3>Acesse os links ao lado </h3><img  style="width: 30%;" src="user2.png">';
        }

         ?>
      </center>

    </div>
  </div>

</div>
<!-- /.container-fluid-->
<!-- /.content-wrapper-->
<footer class="sticky-footer">
  <div class="container">
    <div class="text-center">
      <small>Copyright © Emmanoel Rodrigo - imagine school</small>
    </div>
  </div>
</footer>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fa fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Vai sair?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Escolha "Logout" abaixo  se deseja sair.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
        <a class="btn btn-primary" href="logout.php">Logout</a>
      </div>
    </div>
  </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Page level plugin JavaScript-->
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>
<!-- Custom scripts for this page-->
<script src="js/sb-admin-datatables.min.js"></script>
<script src="js/sb-admin-charts.min.js"></script>
</div>
</body>

</html>
