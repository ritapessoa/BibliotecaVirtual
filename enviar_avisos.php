<?php

include("conexao.php");

if(isset($_POST['submit'])){
    $avisos = $_POST['avisos'];



    $result = mysqli_query($mysqli, "INSERT INTO avisos(avisos) VALUES ('$avisos')");
    header('Location: avisos.php');  
    
        
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>

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
            <a class="navbar-brand" href="#">Gerenciar Avisos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="avisos.php" class="btn btn-danger me-5">Editar avisos</a>
        </div>
        <div class="d-flex">
            <a href="biblioteca.php" class="btn btn-danger me-5">Voltar</a>
        </div>
    </nav>
    <br><br>
    <form method="POST" enctype="multipart/form-data" action="">
            <div class="inputBox">
                <input type="text" name="avisos" id="avisos" class="inputUser" >
                <label for="avisos" class="labelInput">Aviso</label>
            </div>
            <br><br>
        <button name="submit" type="submit">Enviar arquivo</button>
        <br><br>
</body>
</html>