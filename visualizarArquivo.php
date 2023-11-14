<?php

include("conexao.php");


if(isset($_GET['deletar'])){

    $id = intval($_GET['deletar']);
    $sql_query= $mysqli -> query("SELECT * FROM arquivos WHERE id = '$id'") or die ($mysqli-> error);
    $arquivo = $sql_query->fetch_assoc();

    if(unlink($arquivo['path'])){
        $mysqli -> query("DELETE FROM arquivos WHERE id = '$id'") or die ($mysqli-> error);
    }

    echo"<p>Arquivo excluido com sucesso! </p>";

}

if(isset($_FILES) && count($_FILES) > 0){
    var_dump($_FILES);

    die();
}

function enviarArquivo($error, $name, $tmp_name){

    include("conexao.php");

        if($error)
            die("Falha ao enviar. Erro no arquivo ou arquivo não selecionado.");
    
        
        $pasta = "arquivos/";
        $nomeDoArquivo = $name;
        $novoNomeDoArquivo = uniqid();
        $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
    
        $path = $pasta . $novoNomeDoArquivo . "." . $extensao;
        $deu_certo = move_uploaded_file($tmp_name, $path);
        if($deu_certo){
            $mysqli->query("INSERT INTO arquivos (nome, path) VALUES ('$nomeDoArquivo', '$path')") or die($mysqli -> error);
            return true;
        }else
            return false;
}

if(isset($_FILES['arquivos'])){
    $arquivos = $_FILES['arquivos'];
    $tudo_certo = true;
    foreach($arquivos['name'] as $index => $arq){
        $deu_certo = enviarArquivo($arquivos['error'][$index], $arquivos ['name'][$index], $arquivos["tmp_name"][$index]);
        if(!$deu_certo)
        $tudo_certo = false;
    }

    if($tudo_certo)
        echo "<p>Todos os arquivos foram enviados com sucesso!";
    else
        echo "<p>Falha ao enviar um ou mais arquivos!";
}

$sql_query= $mysqli -> query(  "SELECT * FROM arquivos") or die ($mysqli-> error);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Lista de Livros</h1>
    <table border="1" cellpadding="10">
        <thead>
            <th>Preview</th>
            <th>Nome</th>
            <th>Arquivos</th>
        </thead>
        <tbody>
        <?php
    //lista dos arquivos enviados
    while($arquivo = $sql_query ->fetch_assoc()){
    ?>
    <tr>
   
        <td><img height="50" src="<?php echo $arquivo['path']; ?>" alt=""></td>
        <td><?php echo basename($arquivo['nome']); ?></td>
        <td><a target="_black" href="<?php echo $arquivo['path']; ?>"><?php echo $arquivo['path'];?></a></td>


    </tr>
    <?php
    }
    ?>
    </tbody>
</table>

    
</body>
</html>