<?php
session_start();
include_once('config.php');
if ((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['nome']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
$logado = $_SESSION['nome'];


$sql = "SELECT * FROM produto ORDER BY id DESC";

$result = $conexao->query($sql);

//print_r($result);




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Produtos documentados</title>
</head>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(to right, rgb(100, 1, 22), rgb(7, 54, 10));
        color: white;
    }

    h1 {
        text-align: center;
    }

    .table-bg {
        background: rgba(0, 0, 0, 0.3);
        border-radius: 15px 15px 0 0;
    }

    .return {
        text-align: end;
        background: rgba(0, 0, 0, 0.3);
        padding: 10px;

    }
</style>

<body>
    <?php echo "<h1> Usuario: <u>$logado</u></h1>"; ?>
    <div class="m-5">
        <table class="table text-white table-bg">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">marca</th>
                    <th scope="col">classe</th>
                    <th scope="col">...</th>

                </tr>

            </thead>
            <tbody>
                <div class="return">
                    <a href="soft.php">Voltar</a>
                </div>
                <?php
                while ($user_data = mysqli_fetch_assoc($result)) {

                    echo "<td>" . $user_data['id'] . "</td>";
                    echo "<td>" . $user_data['nome'] . "</td>";
                    echo "<td>" . $user_data['marca'] . "</td>";
                    echo "<td>" . $user_data['classe'] . "</td>";
                    echo "<td>
                            <a class='btn btn-sm btn-primary' href='alter.php?id=$user_data[id]'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                            <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                            
                            </td>";
                    echo "</tr>";
                }
                ?>


</body>

</html>