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
                    <input type="text" name="nome" placeholder="Digite nome do produto">
                    <br><br>
                    <label for="marca">Marca do Produto: </label>
                    <input type="text" name="marca" placeholder="Digite marca">
                    <br><br>
                    
                    <input list="classe" name="classe" id="inputClasse">
                    <datalist id="classe">
                        <option value="Domestico"></option>
                        <option value="Alimento"></option>
                        <option value="Animal"></option>
                        <option value="Higienico"></option>
                    </datalist>
                </div>
            </fieldset>
        </form>
    </div>
    
</body>
</html>