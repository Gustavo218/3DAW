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
    <h3>Insira Dados da disciplina</h3>
    <form action="av1_Inserir.php" method="POST">
        <div>
            <label for="">Nome</label>
            <input type="text" name="nome" placeholder= "Insira Nome">
        </div>
        <div>
            <label for="">Período</label>
            <input type="number" name="periodo" placeholder= "Insira Período">
        </div>
        <div>
            <label for="">ID Pré-Requisito</label>
            <input type="number" name="idprerequisito" placeholder= "Insira ID Pré-Requisito">
        </div>
        <div>
            <label for="">Créditos</label>
            <input type="number" name="credito" placeholder= "Insira Créditos">
        </div>
            <button type="submit" name="Inserir">Salvar</button>
    </form>
    <?php
        if(isset($_SESSION['status']))
        {
            echo "<h3>".$_SESSION['status']."</h4>";
            unset($_SESSION['status']);
        }
        
    ?>
    
</body>
</html>