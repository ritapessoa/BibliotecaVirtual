<?php
    include_once('conexao.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $data_nascimento = $_POST["data_nascimento"];

        $sqlInsert = "UPDATE usuarios SET nome='$nome', email= '$email', senha= '$senha', data_nascimento='$data_nascimento'
        WHERE id='$id'";

        $result = $mysqli->query($sqlInsert);  
    }
    header('Location: gerente.php');
?>