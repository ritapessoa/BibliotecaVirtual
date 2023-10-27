<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body{
          font-family: Arial, Helvetica, sans-serif;  
          background-image: linear-gradient(to right, rgb(20, 220, 80), rgb(17, 71, 41));
          text-align:center;
          color:aliceblue;
        }
        div{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
            padding: 70px;
            border-radius: 15px;
            color: white;
        }
        input{
            padding:15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        a{
            text-decoration: none;
            color:white;
        }
        .inputSubmit{
            background-color: rgb(64, 119, 64);
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }
        .inputSubmit:hover{
            background-color: darkgreen;
        }
    </style>
</head>
<body>
    <h1>Biblioteca Digital Universitaria</h1>
    <div>
        <h1> Login </h1>
        <form action="testLogin.php" method="POST">
            <input type= "text" name="email" placeholder="E-mail">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <a href="cadastro.php">Cadastre-se</a>
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>