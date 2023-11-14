<?php
    include_once('conexao.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $path = $_POST['path'];
        $autor = $_POST['autor'];
        $referencia = $_POST['referencia'];
        $metadados = $_POST['metadados'];


        $sqlInsert = "UPDATE arquivos SET nome='$nome', path= '$path', autor= '$autor', referencia='$referencia', metadados='$metadados' 
        WHERE id='$id'";

        $result = $mysqli->query($sqlInsert);  
    }
    header('Location: projetoFinal.php');
?>