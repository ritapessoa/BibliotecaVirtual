<?php
session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email'] && !empty($_POST['senha'])))
    {
        //Acessa
        include_once('conexao.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //print_r('Email: '. $email);
        //print_r('senha: '. $senha);
        


        $sql = "SELECT * FROM usuarios WHERE email= '$email' and senha= '$senha'";

        $result = $mysqli->query($sql);

        //print_r($result);
        //print_r($sql);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']); 
            header('Location: Login.php');

        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: biblioteca.php');
        }
    }
    else
    {
        //Nao acessa
        header('Location: Login.php');
    }

?>