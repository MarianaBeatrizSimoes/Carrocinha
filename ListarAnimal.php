<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php
    include('includes/conexao.php');
   
    $sql ="SELECT FLOOR(datediff(curdate(), data_nascimento) / 365) as idade, ani.id, ani.nome nomeAnimal, ani.especie,ani.raca, ani.data_nascimento, ani.castrado, pess.nome nomePessoa, pess.email FROM animal ani LEFT JOIN pessoa pess ON pess.id = ani.id_pessoa";
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
         <th>Dono</th>
         <th>Alterar</th>
         <th>Deletar</th>
        </tr>

   
<?php //mysqli_fetch_array lê uma linha por vez
        while($row = mysqli_fetch_array($result)){
            $castrado = $row['castrado'] == 1 ? "Sim" : "Não";
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nomeAnimal']."</td>";
            echo "<td>".$row['especie']."</td>";
            echo "<td>".$row['raca']."</td>";
            echo "<td>".$row['data_nascimento']."</td>";
            echo "<td>" . $row['idade'] . " anos </td>";
            echo "<td>" . $castrado . "</td>";
            echo "<td>".$row['nomePessoa']."</td>";
            echo "<td><a href='Alteraanimal.php?id=".$row['id']."'>Alterar</a></td>";
            echo "<td><a href='Deletaanimal.php?id=".$row['id']."'>Deletar</a></td>";
            echo "</tr>";
        }
        ?>
         </table>
</body>
</html>