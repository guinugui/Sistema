<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema</title>
</head>
<style>
    body{
        background: rgba(0,0,0,0.6);
    }
    .box{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.6);
        padding: 30px;
        border-radius: 10px;

    }
    a{
        text-decoration: none;
        color: white;
        border: 3px solid dodgerblue;
        border-radius: 10px;
        padding: 10px;


    }
    a:hover{
        background-color: dodgerblue;}
</style>
<body>
<div class="box">
        <a href="cadastro.php">Cadastro</a>
        <a href="login.php">Login</a>
</div>
</body>
</html>