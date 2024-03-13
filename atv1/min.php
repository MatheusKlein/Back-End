<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mínimo</title>
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
            color: rgb(253, 253, 253);
            font-weight: 400;
            text-align: center;
            justify-content: center;
        }
        label{
            font-size: 15px;
            color: rgb(253, 253, 253);
        }
        fieldset{
            color: white;
        }
</style>
</head>
<body>
    <h1>Mínimo<h1>
    <h2>Retorna o menor número</h2>

    <div class="pcentral">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
        <fieldset>
            <label for="numero">1° valor</label> <br>
            <input type="number" name="n1">
            <br><br>
            <label for="numero">2° valor</label> <br>
            <input type="number" name="n2">
            <br><br>
            <label for="numero">3° valor</label> <br>
            <input type="number" name="n3">
            <br> <br>
            <label for="numero">4° valor</label> <br>
            <input type="number" name="n4">
            <br> <br>
            <label for="numero">5° valor</label> <br>
            <input type="number" name="n5">
            <br> <br>
            <input type="submit" value="calcular">
            <br>
            <?php
                if(isset($_GET['n1']) && isset($_GET['n2']) && isset($_GET['n3']) && isset($_GET['n4']) && isset($_GET['n5'])) {
                  $valor1 = $_GET['n1'];
                  $valor2 = $_GET['n2'];
                  $valor3 = $_GET['n3'];
                  $valor4 = $_GET['n4'];
                  $valor5 = $_GET['n5'];
                  $minimo = min($valor1, $valor2, $valor3, $valor4, $valor5);
                echo"<p>O menor número é: " .$minimo;
                }
            ?>
        </fieldset>
    </form>
</body>
</html>