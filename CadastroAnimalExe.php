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
    $nome = $_POST['nome'];
    $especie = $_POST['especie'];
    $raca = $_POST['raca'];
    $datanasc = $_POST['datanasc'];
    $castrado = $_POST['castrado'] == "Sim" ? true : false;
    $pessoa = $_POST['pessoa'];
    echo "<h1>Dados do Animal</h1>";
    echo "Nome: $nome<br>";
    echo "Espécie: $especie<br>";
    echo "Raça: $raca<br>";
    echo "Data de nascimento: $datanasc<br>";
    echo "Castrado: " . ($castrado ? "Sim" : "Não") . "</br>";
    echo "Dono: $pessoa<br>";
    $castrado = $castrado ? 0 : 1;
    $dataNascimentoFormatada = date('Y-m-d', strtotime($dataNascimento));
    $sql = "INSERT INTO Animal(nome, especie, raca, data_nascimento, castrado, id_pessoa)";
    $sql .= " VALUES('".$nome."','".$especie."','".$raca."','".$datanasc."', '".$castrado."', '".$pessoa."')";
    echo $sql;
    $result = mysqli_query($con,$sql);
    if($result){
        echo "<h2>Dados cadastrados com sucesso</h2>";
    }
    else{
        echo "<h2>Erro ao cadastrar</h2>";
        echo mysqli_error($con);
    }
    ?>
</body>
</html>