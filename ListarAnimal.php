<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include('includes/conexao.php');
    $sql = "SELECT * FROM Animal";
    $result = mysqli_query($con, $sql); //execulta a consulta
    ?>
    <h1>Consulta de Animais</h1>
    <a href="CadastroAnimal.php">Cadastrar Nova Cidade</a>
    <table align="center" border="1" width="500">
       <tr>
         <th>Código</th>
         <th>Nome</th>
         <th>Espécie</th>
         <th>Raça</th>
         <th>Data de nascimento</th>
         <th>idade</th>
         <th>Castrado</th>
        </tr>
        <?php //mysqli_fetch_array lê uma linha por vez
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nome']."</td>";
            echo "<td>".$row['especie']."</td>";
            echo "<td>".$row['raça']."</td>";
            echo "<td>".$row['datanasc']."</td>";
            echo "<td>".$row['castrado']."</td>";
            echo "<td><a href='alteraCidade.php?id=".$row['id']."'>Alterar</a></td>";
            echo "<td><a href='deletaCidade.php?id=".$row['id']."'>Deletar</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>