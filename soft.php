<?php 
session_start();
include_once('config.php');
if((!isset($_SESSION['nome'])== true)and (!isset($_SESSION['senha'])== true))
    {
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }

$logado = $_SESSION['nome'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soft</title>
</head>
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(to right, rgb(100, 200, 300), rgb(400, 500, 600));
        color: black;
    }
    h1{
        text-align: center;
       
    }
    .box{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.6);
        padding: 60px;
        border-radius: 10px;
    }
    a{
        text-decoration: none;
        color: black;
        border-radius: 6px;
        padding: 8px;
    }
    a:hover{
        background-color: dodgerblue;
    }
    h2{
        text-align: center;
    }
    .d-flex{
        text-align: end;
    }
</style>
<body>
<h1>SISTEMA SOFT</h1>
    
    <?php echo " <h2> Usuario: <u>$logado</u></h2>";?>
    
    <div class="box">
        
        <a href="formProdut.php">Cadastra Produto</a><br><br>
        <a href="relatorio.php">Relatorio de Produto</a>
    </div>
    <div class="d-flex">
        <a href="sair.php" class="btn btn-danger">sair</a>
    </div>
    
</body>
</html>