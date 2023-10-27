<?php

    if(isset($_POST['submit']))
    {
        // print_r($_POST['nome']);
        // print_r($_POST['email']);
        // print_r($_POST['senha']);

        include_once('conexao.php');
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $data_nascimento = $_POST["data_nascimento"];

        $result = mysqli_query($mysqli, "INSERT INTO usuarios(nome,email,senha,data_nascimento) VALUES ('$nome', '$email', '$senha', '$data_nascimento')");
        header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="" width=device-width, initial-scale="1.0">
    <title> Cadastro Biblioteca Digital </title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 220, 80), rgb(17, 71, 41));
            text-align:center;
            color:aliceblue;
        }

        .box {
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }

        fieldset {
            border: 3px solid green;
        }

        legend {
            border: 1px solid green;
            padding: 10px;
            text-align: center;
            background-color: green;
            border-radius: 8px;
        }

        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus~.labelInput,
        .inputUser:valid~.labelInput {
            top: -20px;
            font-size: 12px;
            color: green;
        }

        #data_nascimento {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #submit {
            background-image: linear-gradient(to right, rgb(20, 220, 80), rgb(17, 71, 41));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        a{
            text-decoration: none;
            color:white; 
        }

    </style>
</head>

<body>
    <h1>Biblioteca Digital Universitaria</h1>
    <div class="box">
       <form action="cadastro.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Usuário</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br>
                <input type="submit" name="submit" id="submit">
                <br><br>
                <a href="login.php">Voltar</a>
            </fieldset>
        </form>
    </div>
</body>

</html>