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

    $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    
    $result = $mysqli->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Gerente</title>
    <style>
        body{
          background-color: #e6e6e6;;         
          text-align: center;
        }
        .table-bg{
            background:rgba(0,0,0,0.5);
            border-radius: 15px 15px 0 0;
        }
        </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Gestão da Biblioteca</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="biblioteca.php" class="btn btn-danger me-5">Voltar</a>
        </div>
    </nav>
        <br>
    <div class="m-5">
    <table class="table text-white table-bg">
  <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Senha</th>
        <th scope="col">Data de nascimento</th>
        <th scope="col">...</th>
        <div class="d-flex">
        <a href="cadastro.php" class="btn btn-info">Cadastrar</a>
    </div>

    </tr>
  </thead>
  <tbody>
    <?php
        while($user_data = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo"<td>".$user_data['id']."</td>";
            echo"<td>".$user_data['nome']."</td>";
            echo"<td>".$user_data['email']."</td>";
            echo"<td>".$user_data['senha']."</td>";
            echo"<td>".$user_data['data_nascimento']."</td>";
            echo"<td>
                <a class= 'btn btn-sm btn-primary' href='edit.php?id=$user_data[id]'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
            </svg></a>
            <a class= 'btn btn-sm btn-danger' href='delete.php?id=$user_data[id]' title='Deletar'>
            <svg xmlns='ttp://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
            <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
            </svg>
            </a>
            </td>";
            echo "</tr>";
        }
    ?>
  </tbody>
</table>
    </div>
</body>
</html>