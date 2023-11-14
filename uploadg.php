<?php

include("conexao.php");

if(isset($_POST['submit'])){
    $arquivo = $_FILES['arquivo'];
    $autor = $_POST['autor'];
    $referencia = $_POST['referencia'];
    $metadados = $_POST['metadados'];
    $avaliacao = $_POST['avaliacao'];

    if($arquivo['error'])
    die("Falha ao enviar arquivo");

//Configs arquivo
    $pasta = "arquivos/";
    $nomeDoArquivo = $arquivo['name'];
    $novoNomeDoArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

    $path = $pasta . $novoNomeDoArquivo . "." . $extensao;

    $deu_certo = move_uploaded_file($arquivo['tmp_name'], $path);

    if($deu_certo){
        $mysqli->query("INSERT INTO arquivos (nome, path, autor, referencia, metadados, avaliacao ) VALUES ('$nomeDoArquivo', '$path', '$autor', '$referencia', '$metadados', '$avaliacao')") or die($mysqli -> error);
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
        .box-search{
            display: flex;
            justify-content: center;
            gap: .1%;
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
            <a href="projetoFinalg.php" class="btn btn-danger me-5">Editar projeto</a>
        </div>
        <div class="d-flex">
            <a href="biblioteca.php" class="btn btn-danger me-5">Voltar</a>
        </div>
    </nav>
    <br><br>
    <form method="POST" enctype="multipart/form-data" action="">
        <p><label for="">Selecione o arquivo</label>
        <input name= "arquivo" type='file'></p>
        <br>
            <div class="inputBox">
                <input type="text" name="autor" id="autor" class="inputUser" >
                <label for="autor" class="labelInput">Autor</label >
            </div>
            <br>
            <div class="inputBox">
                    <input type="text" name="referencia" id="referencia" class="inputUser" >
                    <label for="referencia" class="labelInput">referencia</label>
                </div>
            <br>
            <div class="inputBox">
                    <input type="text" name="metadados" id="metadados" class="inputUser" >
                    <label for="metadados" class="labelInput">Data - Informações</label>
                </div>
                <br>
            <div class="inputBox">
                    <input type="text" name="avaliacao" id="avaliacao" class="inputUser" >
                    <label for="avaliacao" class="labelInput">Avaliação</label>
                </div>
                <br>
                <button name="submit" type="submit">Enviar arquivo</button>
        <br><br>


    </form>
      </body>
      </html>