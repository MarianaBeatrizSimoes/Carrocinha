<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="CadastroPessoaExe.php" method="post">
        <fieldset>
      <legend>Cadastro do Cliente</legend>
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <label for="endereço">Endereço:</label>
            <input type="text" name="endereço" id="endereço">
        </div>
        <div>
            <label for="bairro">Bairro:</label>
            <input type="text" name="bairro" id="bairro">
        </div>
        <div>
            <label for="cidade">Cidade:</label>
            <select name="cidade" id="cidade">
           <?php
            include('includes/conexao.php');
            $sql = "SELECT * FROM Cidade";
            $result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_array($result)){
                echo "<option value ='".$row['id']."'>".$row['nome']."/".$row['estado']."</option>";
            }
            ?>
            </select>
        </div>
        <div>
            <label for="cep">CEP:</label>
            <input type="text" name="cep" id="cep">
        </div>
        <div>
            <button type="submit" value="<?php echo $row['id']; ?>">Cadastrar</button>
        </div>
    </fieldset>
    </form>
</body>
</html>