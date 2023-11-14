<?php
    include_once('conexao.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $avisos = $_POST['avisos'];


        $sqlInsert = "UPDATE avisos SET avisos='$avisos'
        WHERE id='$id'";

    $result = $mysqli->query($sqlInsert);  
    }
    header('Location: avisos.php');
?>
$sqlInsert = "UPDATE usuarios 
        SET nome='$nome',senha='$senha',email='$email',telefone='$telefone',sexo='$sexo',data_nasc='$data_nasc',cidade='$cidade',estado='$estado',endereco='$endereco'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: sistema.php');
