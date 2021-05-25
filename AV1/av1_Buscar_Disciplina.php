<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de dados</title>
</head>
<body>
    <h3>Insira id para buscar disciplina </h3>

    <form action="" method="POST">
        <input type="number" name="id" placeholder = "Insira ID"/>
        <input type="submit" name="buscar" value="Inserir">
    </form>
    <button onclick="history.go(-1);">Voltar</button>
</body>
<?php
        $conn= mysqli_connect("localhost","root","","av1");
        $banco = mysqli_select_db($conn,'av1');

        if (isset($_POST['buscar']))
        {
            $id = $_POST ['id'];

            $sql = "SELECT * FROM `disciplina` where id ='$id' ";
            $result = mysqli_query($conn,$sql);
            
            echo "<table border='1'>";
            echo "<th>id</th><th>nome</th><th>periodo</th><th>idprerequisito</th><th>credito</th>";
    
            while ($linha = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $linha["id"]. "</td>";
                echo "<br>";
                echo "<td>" . $linha ["nome"]. "</td>";
                echo "<br>";
                echo "<td>". $linha ["periodo"]. "</td>";
                echo "<br>";
                echo "<td>".$linha ["idprerequisito"]. "</td>";
                echo "<br>";
                echo "<td>" . $linha ["credito"]. "</td>";
                echo "<br>";
            }
            if ($sql){
                echo "Disciplina encontrada";
            }
            else
            {
                echo "Disciplina não encontrada";
            }
        }
?>
</html>