<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de dados</title>
</head>
<body>
    <h3>Insira dados para alterar a disciplina </h3>

    <form action="" method="POST">
        <input type="number" name="id" placeholder = "Insira ID"/>
        <br>
        <input type="text" name="nome" placeholder = "Insira Nome"/>
        <br>
        <input type="number" name="periodo" placeholder = "Insira Período"/>
        <br>
        <input type="number" name="idprerequisito" placeholder = "Insira ID Pré-Requisito"/>
        <br>
        <input type="number" name="credito" placeholder = "Insira Crédito"/>
        <br>
        <input type="submit" name="alterar" value="Inserir">
    </form>
    <button onclick="history.go(-1);">Voltar</button>
</body>
<?php
        $conn= mysqli_connect("localhost","root","");
        $banco = mysqli_select_db($conn,'av1');

        if (isset($_POST['alterar']))
        {
            $id = $_POST ['id'];

            $sql = "UPDATE `disciplina` SET nome='$_POST[nome]', periodo='$_POST[periodo]',idprerequisito='$_POST[idprerequisito]',credito='$_POST[credito]' where id='$_POST[id]'";
            $result = mysqli_query($conn,$sql);

            if ($sql)
            {
                echo "Dado alterado com Successo";
            }
            else
            {
                echo "Dado não encontrado ou inalterado";
            }
            
        }
?>
</html>
