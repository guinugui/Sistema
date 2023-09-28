<?php 

    if(isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['senha']))
    {

    include_once('config.php');
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE nome = '$nome' and senha = '$senha'";
    $result = $conexao->query($sql);
    
    if(mysqli_num_rows($result) < 1){
    
        header('Location: login.php');
    }else
    {   
        
        header('Location: soft.php');
    }
    
    }
    else{
        header('Location: login.php');
        
    }
?>