<?php
    include_once('conexao.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $path = $_POST['path'];
        $autor = $_POST['autor'];
        $referencia = $_POST['referencia'];
        $metadados = $_POST['metadados'];
        $avaliacao = $_POST['avaliacao'];


        $sqlInsert = "UPDATE arquivos SET nome='$nome', path= '$path', autor= '$autor', referencia='$referencia',metadados='$metadados', avaliacao='$avaliacao'
        WHERE id='$id'";

        $result = $mysqli->query($sqlInsert);  
    }
    header('Location: projetofinalg.php');
?>