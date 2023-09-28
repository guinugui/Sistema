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
</style>
<body>
<h1>SISTEMA SOFT</h1>
    <div class="box">
        
        <a href="formProdut.php">Cadastra Produto</a><br><br>
        <a href="relatorio.php">Relatorio de Produto</a>
    </div>
    
</body>
</html>