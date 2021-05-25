<?php
    session_start();
    $conn= mysqli_connect("localhost","root","","av1");
    if ($conn->connect_error){
        die("Conexão com erro: " . $conn->connect_error);
    }       
    if (isset($_POST['Inserir'])){
            $nome = $_POST['nome'];
            $periodo = $_POST['periodo'];
            $idpre = $_POST['idprerequisito'];
            $credito = $_POST['credito'];
    
            $sql = "INSERT INTO disciplina (nome,periodo,idprerequisito,credito) VALUES ('$nome','$periodo','$idpre','$credito')";
            $result = mysqli_query($conn,$sql);
    
            if ($result)
            {
                $_SESSION['status'] = "Dado inserido com Successo";
                header("Location: av1_CriarDisciplina.php");
            }
            else
            {
                $_SESSION['status'] = "Data Não Inserida";
                header("Location: av1_Criar_Disciplina.php");
            }
        
    mysqli_close($conn);
        }
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
<button onclick="history.go(-1);">Voltar ao Menu</button>
</body>
</html>
