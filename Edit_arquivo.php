<?php
if(!empty($_GET['id']))
{

    include_once('conexao.php');
    
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM arquivos WHERE id=$id";

    $result = $mysqli -> query($sqlSelect);

    if($result ->num_rows >0)
    {
        while($user_data =  mysqli_fetch_assoc($result)){ 
        $nome = $user_data['nome'];
        $path = $user_data['path'];
        $autor = $user_data['autor'];
        $referencia = $user_data['referencia'];
        $metadados = $user_data['metadados'];
        $avaliacao = $user_data['avaliacao'];

         }
    }
    else{
        header('Location: uploadt.php');
    }
}
else{
    header('Location: uploadt.php');
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
            <a class="navbar-brand" href="#">Gerenciar Projetos Finais</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="uploadt.php" class="btn btn-danger me-5">Voltar</a>
        </div>
    </nav>
    <br><br>
    <form action="SaveEditA.php" method="POST">
            <div class="inputBox">
                <input type="text" name="autor" id="autor" class="inputUser" value="<?php echo $autor ?>" >
                <label for="autor" class="labelInput">Autor</label>
            </div>
            <br>
            <div class="inputBox">
                    <input type="text" name="referencia" id="referencia" value="<?php echo $referencia ?>" class="inputUser" >
                    <label for="referencia" class="labelInput">referencia</label>
                </div>
            <br>
            <br>

            <input type="hidden" name="id" value=<?php echo $id;?>>
            <input type="hidden" name="nome" value=<?php echo $nome;?>>
            <input type="hidden" name="path" value=<?php echo $path;?>>
            <input type="hidden" name="metadados" value=<?php echo $metadados;?>>
                <input type="submit" name="update" id="submit">
        </form>
        <div class="m-5">
    <table class="table text-white table-bg">
  <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Arquivo</th>
        <th scope="col">Autor</th>
        <th scope="col">Referência</th>
        <th scope="col">Data -Informações</th>
        <th scope="col">Avaliação</th>
        <th scope="col">...</th>
        <div class="d-flex">
    </div>

    </tr>
  </thead>
  <tbody>
  <?php
  
        $sql = "SELECT * FROM arquivos ORDER BY id DESC";
        $result = $mysqli->query($sql);
        ?>
    <?php
        while($user_data = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo"<td>".$user_data['id']."</td>";
            echo"<td>".$user_data['nome']."</td>";
            echo"<td>".$user_data['path']."</td>";
            echo"<td>".$user_data['autor']."</td>";
            echo"<td>".$user_data['referencia']."</td>";
            echo"<td>".$user_data['metadados']."</td>";
            echo"<td>".$user_data['avaliacao']."</td>";
            echo"<td>
                <a class= 'btn btn-sm btn-primary' href='edit_arquivo.php?id=$user_data[id]'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
            </svg></a>
            <a class= 'btn btn-sm btn-danger' href='delete_arquivos.php?id=$user_data[id]' title='Deletar'>
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