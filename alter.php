<?php

include_once('config.php');
if (!empty($_GET['id'])) {

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM produto WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if ($result->num_rows > 0) {
        $user_data = mysqli_fetch_assoc($result);
        $nome = $user_data['nome'];
        $marca = $user_data['marca'];
        $classe = $user_data['classe'];


    } else {
        header('location: relatorio.php');
    }

}
if (isset($_POST['update'])) {
    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $classe = $_POST['classe'];
    $id = $_POST['id'];


    $sqlUpdate = "UPDATE produto SET nome = '$nome', marca = '$marca', classe = '$classe'
    where id = $id ";
    print_r($sqlUpdate);

    $result = $conexao->query($sqlUpdate);

    header('location: relatorio.php');


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
        <form action="alter.php" method="POST">
            <fieldset>
                <div>
                    <label for="nome">Nome do Produto: </label>
                    <input type="text" name="nome" id="nome" placeholder="Digite nome do produto"
                        value="<?php echo $nome ?>" require>
                    <br><br>
                    <label for="marca">Marca do Produto: </label>
                    <input type="text" name="marca" id="marca" placeholder="Digite marca" value="<?php echo $marca ?>"
                        require>
                    <br><br>

                    <input list="classe" name="classe" id="inputClasse" placeholder="Classe do Produto">
                    <datalist id="classe">
                        <option value="Domestico" <?php echo ($classe == 'Domestico') ? 'checked' : '' ?>></option>
                        <option value="Alimento" <?php echo ($classe == 'Alimento') ? 'checked' : '' ?>></option>
                        <option value="Animal" <?php echo ($classe == 'Animal') ? 'checked' : '' ?>></option>
                        <option value="Higienico" <?php echo ($classe == 'Higienico') ? 'checked' : '' ?>></option>
                    </datalist>
                    <input type="submit" name="update" id="update">

                </div>
                <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
            </fieldset>
        </form>
        <a href="relatorio.php">Voltar</a>
    </div>

</body>

</html>