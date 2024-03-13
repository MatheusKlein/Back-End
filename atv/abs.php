<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absoluto</title>
    <style type="text/css">
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgb(44, 45, 48);
        }
        h1{
            padding: 10px;
            color: rgb(253, 253, 253);
            text-align: center;
        }
        h2{
            font-size: 19px;
            color: rgb(253,253,253);
            font-weight: 400;
            text-align: center;
            justify-content: center;
        }
        label{
            font-size: 15px;
            color: rgb(253, 253, 253);
        }
        fieldset{
            color:white;
        }
</style>
</head>
<body>
    <h1>Absoluto</h1>
    <h2>Podemos dizer que módulo é o mesmo que distância de um número real ao número zero, pois o módulo de número real surgiu da necessidade de medir a distância de um número negativo ao zero.</h2>

    <div class="pcentral">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
        <fieldset>
            <label for="idade">numero absoluto</label> <br>
            <input type="number" name="n1" id="idadejs">
            <br> <br>
            <input type="submit" value="calcular">
            <br>
            <?php
                $valor = $_GET['n1'];
                echo abs($valor);
            ?>
        </fieldset>
    </form>
</body>
</html>