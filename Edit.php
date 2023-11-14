<?php

    if(!empty($_GET['id']))
    {

        include_once('conexao.php');
        
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

        $result = $mysqli -> query($sqlSelect);

        if($result ->num_rows >0)
        {
            while($user_data =  mysqli_fetch_assoc($result)){ 
            $nome = $user_data['nome'];
            $email = $user_data['email'];
            $senha = $user_data['senha'];
            $data_nascimento = $user_data["data_nascimento"];
             }
        }
        else{
            header('Location: gerente.php');
        }
    }
    else{
        header('Location: gerente.php');
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

        #update {
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
    <a href="gerente.php">voltar</a>
    <h1>Biblioteca Digital Universitaria</h1>
    <div class="box">
       <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Usuário</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser"  value="<?php echo $nome ?>"equired>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email ?>" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" value="<?php echo $senha ?>" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $data_nascimento?>" required>
                <br><br>
                <input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="submit" name="update" id="submit">
                <br><br>
            </fieldset>
        </form>
    </div>
</body>

</html>