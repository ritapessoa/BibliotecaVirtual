<?php
include_once('conexao.php');

if(!empty($_GET['id']))
{
    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM avisos WHERE id=$id";
        $result = $mysqli->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $avisos = $user_data['avisos'];

            }
        }
        else
        {
            header('Location: avisos.php');
        }
    }
    else
    {
        header('Location: avisos.php');
    }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Enviar Contribuição</title>
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
            <a class="navbar-brand" href="#">Editar avisos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="biblioteca.php" class="btn btn-danger me-5">Voltar</a>
        </div>
    </nav>
    <br><br>
    <form action="saveEdit_avisos.php" method="POST">
            <div class="inputBox">
                <input type="text" name="avisos" id="avisos" class="inputUser" value=<?php echo $avisos ?>>
                <label for="avisos" class="labelInput">Avisos</label>
            </div>

            <input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="submit" name="update" id="submit">
        </form>
 
      </body>
      </html>