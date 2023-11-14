<?php
  include("conexao.php");


  session_start();
  //print_r($_SESSION);
  if ((!isset($_SESSION['email']) || !isset($_SESSION['senha'])) || $_SESSION['email'] != 'docente@gmail.com') {
    header('Location: Login.php');
    exit();
}

$logado = $_SESSION['email'];


    $logado = $_SESSION['email'];
    
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM avisos WHERE id LIKE '%$data%' or avisos LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM avisos ORDER BY id DESC";
    }
    $result = $mysqli->query($sql);
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Biblioteca Digital Universitaria</title>
    <style>
    body{
          background-color: #e6e6e6;;
          color: white;
          text-align: center;
        }
        .table-bg{
            background:rgba(0,0,0,0.5);
            border-radius: 15px 15px 0 0;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color: #b3b3b3;"> 
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menu</a>
      <div class="dropdown-menu">
      <a class="dropdown-item" href="#">
      <?php
      echo "Bem vindo <u>$logado</u>";
      ?>
      </a>
        <a class="dropdown-item" href="projetoFinalg.php">Gerenciar Projetos Finais</a>
        <div role="separator" class="dropdown-divider"></div>
        <a class="dropdown-item" href="login.php">Sair</a>

      </div>
    </li> 
    <a class="navbar-brand" href="#">Biblioteca Digital Universitária</a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="#avisos">Avisos</a>
    </li>
  </ul>
</nav>
    </nav>
    <br>

<div data-spy="scroll" data-target="#navbar-exemplo2" data-offset="0">
  <br>
  <h4 id="avisos">Avisos</h4>
    <p>
    <div class="m-5">
    <table class="table text-white table-bg">
  <thead>
    <tr>
        <th scope="col">Avisos</th>
        <div class="d-flex">
    </div>

    </tr>
  </thead>
  <tbody>

    <?php
        while($user_data = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo"<td>".$user_data['avisos']."</td>";
            echo"</tr>";
          }
          ?>
    </tr>
  </thead>
  </p>
</div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>