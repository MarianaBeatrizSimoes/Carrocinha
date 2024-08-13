<?php
    include('includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM Pessoa WHERE id=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
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
    <form action="AlteraPessoaExe.php" method="post">
       <fieldset>
        <legend>Cadastro de Clientes</legend>
        <div>
            <label for="nome">Nome:</label>
            <input type="text" 
                    name="nome" 
                    id="nome"
                    value="<?php echo $row['nome']?>">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="text"
                    name="email"
                    id="email"
                    values="<?php echo $row['email']?>">
        </div>
        <div>
            <label for="endereco">Endereço:</label>
            <input type="text"
                    name="endereco"
                    id="endereco"
                    values="<?php echo $row['endereco']?>">
        </div>
        <div>
            <label for="bairro">Bairro:</label>
            <input type="text"
                    name="bairro"
                    id="bairro"
                    values="<?php echo $row['bairro']?>">
        </div>
        <div>
            <label for="cep">CEP:</label>
            <input type="text"
                    name="cep"
                    id="cep"
                    values="<?php echo $row['cep']?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <div>
            <button type="submit">Cadastrar</button>
        </div>
    
       </fieldset>
    </form>
    </body>
    </html>