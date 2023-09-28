<?php 
if(isset($_POST['submit']))
{
include_once('config.php');

        $nome=  $_POST['nome'];
        $senha= $_POST['senha'];
        
        $result = mysqli_query($conexao, "INSERT INTO usuario(nome,senha)
        VALUES ('$nome','$senha')");
    
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<Style>
    body{
       font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(to right, rgb(300, 120, 230), rgb(14, 67, 1555)); 
        
    }
    .inputbox{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
       
    }
    .inputbtt{
        border-radius: 15px;
        background: 5px solid ;
        cursor: pointer;
        padding: 5px;
    }
    .inputbtt:hover{
        background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
    }
 
</Style>

<body>
    
    <form action="cadastro.php" method="POST">
        <fieldset>
            <div class= "inputbox">
                 <h1>CADASTRO</h1>
                <input type="text" name="nome" id='inputuser' require>
                <label for="nome" class="laberInput">Usuario</label><br><br>
                <input type="password" name="senha" id='inputuser' require>
                <label for="senha">senha</label><br><br>
                <input class= "inputbtt" type="submit" name= "submit" value = "enviar"> 
            </div>
            <a href="home.php">Voltar</a>

           
        </fieldset>
    </form>
    
</body>
</html>