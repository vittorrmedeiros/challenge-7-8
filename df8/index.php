<?php

    if($_POST){

       $produtos = 
       [$_POST['produto1'], 
       $_POST['produto2'], 
       $_POST['produto3']];

        $min = min($produtos);
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
</head>
<body>
    <form method="POST">
        <label for="produto1">Primeiro produto</label> <br>
        <input type="number" name="produto1" id="produto1"> <br><br>

        <label for="produto2">Segundo produto</label> <br>
        <input type="number" name="produto2" id="produto2"> <br><br>

        <label for="produto3">Terceiro produto</label> <br>
        <input type="number" name="produto3" id="produto3"> <br><br>

        <input type="submit" value="Enviar">

        <?php
            if($_POST){
                echo "O produto mais barato é: $min";
            }
        ?>
    </form>
</body>
</html>