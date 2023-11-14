<?php
include("conexao.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca</title>
</head>
<body>
    <h2>Resultado da Busca</h2>
    <?php
    if(!isset($_GET['busca'])){
        ?>
    <tr>
        <td colspan="3">Digite algo para pesquisar..</td>
    </tr>
    <?php
    } else {
    $pesquisa = $mysqli -> real_escape_string($_GET['busca']);
    $sql_code = "SELECT * FROM arquivos WHERE nome LIKE '%$pesquisa%'";
    $sql_query = $mysqli ->query($sql_code) or die("Erro ao consultar!".$mysqli -> error);

    if($sql_query->num_rows == 0){
        ?>
        <tr>
        <td colspan="3">Nenhum resultado encontrado..</td>
    </tr>
    <?php  
} else {
    while($arquivo= $sql_query->fetch_assoc()){
        ?>
        <tr>
        <td><a target="_black" href="<?php echo $arquivo['path']; ?>"><?php echo $arquivo['nome'];?></a></td>
        </tr>
        <?php
    }     
}
    ?>
<?php

    }

    ?>
</body>
</html>