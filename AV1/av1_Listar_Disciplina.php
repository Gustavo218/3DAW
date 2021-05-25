<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $nomeBanco = "av1";

        $conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);

        if ($conn->connect_error){
            die("Conexão com erro: " . $conn->connect_error);
        }
    }
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <title>Banco de dados</title>
    </head>
    <body>
        <h1>Dados das disciplinas</h2>
        <form action="av1_Listar_Disciplina.php" method="post">
            <input type="submit" name="ver" value="Mostrar disciplinas">
            <br>
        </form>
    </body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $sql = "SELECT * FROM `disciplina`";
        $result = $conn->query($sql);
        echo "<table border='1'>";
        echo "<th>id</th><th>nome</th><th>periodo</th><th>idprerequisito</th><th>credito</th>";

        while ($linha = $result->fetch_assoc()){
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
        echo "</table>";
    }
?>