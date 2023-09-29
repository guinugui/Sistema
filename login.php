<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    body {
        background-image: linear-gradient(to right, rgb(200, 62, 2), rgb(5, 655, 1));
    }

    .box {

        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .h1 {
        color: red;
        text-align: center;
    }

    .inputAcesse {
        position: relative;
    }
</style>

<body>

    <div class="box">
        <form action="acesso.php" method="POST">
            <fieldset>
                <div>
                    <div class="h1">
                        <h1>Login</h1>
                    </div>
                    <div class="inputAcesse">
                        <input type="text" name="nome" id="nome" placeholder="Nome"><br>
                        <br>
                        <input type="password" name="senha" id="senha" placeholder="Senha"><br>
                        <br>
                    </div>
                    <input type="submit" name="submit" value="Acessar">
            </fieldset>
        </form>
    </div>
</body>

</html>