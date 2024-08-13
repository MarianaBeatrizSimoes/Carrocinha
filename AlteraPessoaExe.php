<?php
    include('includes/conexao.php');
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
?>
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
    <h1>Alteração dados Cliente</h1>
    <?php
    echo"<p>Id: $id</p>";
    echo"<p>Nome: $nome</p>";
    echo"<p>Email: $email</p>";
    echo"<p>Endereço: $endereco</p>";
    echo"<p>Bairro: $bairro</p>";
    echo"<p>CEP:  $cep</p>";
    $sql = "UPDATE pessoa SET
            nome = '$nome',
            email = '$email',
            endereco = '$endereco',
            bairro = '$bairro',
            cep = '$cep'
            WHERE id = $id";
            $result = mysqli_query($con, $sql);
            if($result)
            echo "Dados atualizados!";
            else
            echo "Erro ao atualizar dados!\n".mysqli_error($con);
    ?>
</body>
</html>