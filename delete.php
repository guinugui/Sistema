<?php
include_once('config.php');
if (!empty($_GET['id'])) {

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM produto WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if ($result->num_rows > 0) {
        $sqlDelete = "DELETE FROM produto where id=$id";
        $result = $conexao->query($sqlDelete);
    }
    header('location: relatorio.php');


}


?>