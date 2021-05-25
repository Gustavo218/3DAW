<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Arquivo</title>
</head>
<body>
    <h2>Upload de arquivo formato csv para inserir no mysql</h2>
    <form method="post" enctype ="multipart/form-data">
        <label>Nome</label>
        <input type="text" name = "nome">
        <label>Upload de arquivo</label>
        <input type="File" name="arquivo">
        <input type="submit" name = "Inserir">
    </form>
</body>
</html>

<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomeBanco = "av1";
    $conn = mysqli_connect ($servidor, $usuario, $senha, $nomeBanco);

    if (isset($_POST["submit"]))
    {
        $nome = $_POST["nome"];

        $nomea = rand(0,1000).$_FILES["file"]["name"];

        $tnome = $_FILES["files"]["temp_file"];

        $uploads_arq = '/images';
        move_uploaded_file($tnome, $uploads_arq.'/'.$nomea);

        $sql = "INSERT into usuarios (nome,email,senha,tipo,perfil)";

        if (mysqli_query($conn,$sql)){
            echo "Arquivo carregado";
        }
        else{
            echo "Erro de arquivo";
        }
    }
    
    
?>