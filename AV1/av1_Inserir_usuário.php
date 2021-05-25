<?php
echo "Escrita de Arquivos";
echo "<br><br>";

$arquivoSaida = fopen("Usuários.csv", "w") or
                die("Não consegui abrir o arquivo, deu erro");
$linhaArquivo = ("nome;email;senha;tipo;perfil\n");
fwrite($arquivoSaida, $linhaArquivo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de dados</title>
</head>
<body>
    <form action="av1_Inserir_usuário.php" method = "post">
            Nome:<input type="text" name="nome"> <br>
            Email: <input type="text" name="email"> <br>
            senha: <input type="text" name="senha"> <br>
            Tipo: <input type="text" name="tipo"> <br>
            Perfil: <input type="text" name="perfil"><br>

            <input type = "submit" name = "Inserir">
        </form>

</body>
</html>

<?php
    if (isset($_POST['Inserir'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $tipo = $_POST['tipo'];
        $perfil = $_POST['perfil'];
file_put_contents("D:\\xampp\\htdocs\\AV1\\Usuários.csv", $linhaArquivo, FILE_APPEND);}
?>