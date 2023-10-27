<?php
  include("conexao.php");


    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']); 
        header('Location: Login.php');
    }
    $logado = $_SESSION['email'];

    $sql_query= $mysqli -> query("SELECT * FROM arquivos") or die ($mysqli-> error);

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
    .enviados{
      position: absolute;
      top: 40%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    </style>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color: #b3b3b3;">  
    <a class="navbar-brand" href="#">Biblioteca Digital Universitária</a>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="#adicionados">Adicionados</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#mdo">@mdo</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menu</a>
      <div class="dropdown-menu">
      <a class="dropdown-item" href="#">
      <?php
      echo "Bem vindo <u>$logado</u>";
      ?>
      </a>

        <a class="dropdown-item" href="upload.php">Enviar contribuição</a>
        <a class="dropdown-item" href="#favoritos">Favoritos</a>
        <div role="separator" class="dropdown-divider"></div>
        <a class="dropdown-item" href="login.php">Sair</a>

      </div>
    </li>
  </ul>
</nav>
    </nav>

<div data-spy="scroll" data-target="#navbar-exemplo2" data-offset="0">
  <br><br><br>
  <div class= "enviados">
  <h4 id="adicionados">Adicionados</h4>
    <p>
    <table border="1" cellpadding="10">
        <tbody>
        <?php
    //lista dos arquivos enviados
    while($arquivo = $sql_query ->fetch_assoc()){
    ?>
    <tr>
        <td><a target="_black" href="<?php echo $arquivo['path']; ?>"><?php echo $arquivo['nome'];?></a></td>

    </tr>
    <?php
    }
    ?>
    </tbody>
</table>
    ?>
  </p>
  <h4 id="destaques">Destaques</h4>
  <p>...</p>
  <h4 id="favoritos">Favoritos</h4>
  <p>...</p>
</div>
</div>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>