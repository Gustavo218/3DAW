<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de dados</title>
</head>
<body>
    <h3>Insira id para Excluir disciplina </h3>

    <form action="" method="POST">
        <input type="number" name="id" placeholder = "Insira ID"/>
        <input type="submit" name="excluir" value="Inserir">
    </form>
    <button onclick="history.go(-1);">Voltar</button>
</body>
<?php
        $conn= mysqli_connect("localhost","root","","av1");
        $banco = mysqli_select_db($conn,'av1');

        if (isset($_POST['excluir']))
        {
            $id = $_POST ['id'];
            $sql = "DELETE FROM `disciplina` WHERE `disciplina`.`id` = $id";
            $result = mysqli_query($conn,$sql);
            
            if ($sql){
                echo "Disciplina excluida";
            }
            else
            {
                echo "Disciplina não encontrada";
            }
        }
 
?>
</html>