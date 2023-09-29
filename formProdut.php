<?php
if (isset($_POST['submit'])) {
    //  print_r('Nome: ' . $_POST['nome']);
    // print_r('<br>');
    // print_r('marca: ' . $_POST['marca']);
    //  print_r('<br>');
    //  print_r('classe: ' . $_POST['classe']);
    //   print_r('<br>');



    include_once('config.php');

    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $classe = $_POST['classe'];

    $sql = "INSERT INTO produto(nome,marca,classe)
            VALUES('$nome','$marca','$classe')";

    $result = $conexao->query($sql);




}





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario de produto</title>
</head>

<body>
    <div>
        <form action="formProdut.php" method="POST">
            <fieldset>
                <div>
                    <label for="nome">Nome do Produto: </label>
                    <input type="text" name="nome" id="nome" placeholder="Digite nome do produto">
                    <br><br>
                    <label for="marca">Marca do Produto: </label>
                    <input type="text" name="marca" id="marca" placeholder="Digite marca">
                    <br><br>

                    <input list="classe" name="classe" id="inputClasse" placeholder="Classe do Produto">
                    <datalist id="classe">
                        <option value="Domestico"></option>
                        <option value="Alimento"></option>
                        <option value="Animal"></option>
                        <option value="Higienico"></option>
                    </datalist>
                    <input type="submit" name="submit" id="submit">
                </div>
            </fieldset>
        </form>
        <a href="soft.php">Voltar</a>
    </div>

</body>

</html>