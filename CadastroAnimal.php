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
    <form action="CadastroAnimalExe.php" method="post">
        <fieldset>
            <legend>Cadastro Animal</legend>
            <div>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div>
                <label for="especie">Espécie:</label>
                <input type="text" name="especie" id="especie">
            </div>
            <div>
                <label for="raca">Raça:</label>
                <input type="text" name="raca" id="raca">
            </div>
            <div>
                <label for="datanasc">Data de Nascimento:</label>
                <input type="date" name="datanasc" id="datanasc">
            </div>
            <div>
                    <label>Castrado:</label>
                    <input type="radio" name="castrado" id="castradoSim" value="sim"/><label id="castradoSim">Sim</label>
                    <input type="radio" name="castrado" id="castradoNao" value="nao"/><label id="castradoNao">Não</label>
                </div>
                <div>
                    <label for="pessoa">Dono do animal:</label>
                    <select name="pessoa" id="pessoa">
                   <?php
                    include('includes/conexao.php');
                    $sql = "SELECT * FROM Pessoa";
                    $result = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['id']."'>".$row['nome']."</option>";
                    }
                    ?>
                    </select>
                </div>
                <div>
                <button type="submit" value="<?php echo $row['id']; ?>">Cadastrar</button>
        </div>
        </fieldset>
    </form>
</body>
</html>