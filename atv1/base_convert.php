<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de base</title>
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
    <h1>Conversão de base</h1>
    <h2>A raiz quadrada de um número positivo é um número que, quando elevado ao quadrado, resulta no número que está dentro do radical.</h2>

    <div class="pcentral">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
        <fieldset>
            <label for="numero">número a ser convertido</label> <br>
            <input type="number" name="n1" >
            <br> <br>
            <label for="numero">base</label> <br>
            <input type="number" name="n2">
            <br> <br>
            <label for="numero">base para conversão</label> <br>
            <input type="number" name="n3">
            <br> <br>
            <input type="submit" value="calcular">
            <br>
            <?php
              if(isset($_GET['n1']) && isset($_GET['n2']) && isset($_GET['n3'])) {
                $valor1 = intval($_GET['n1']);
                $valor2 = intval($_GET['n2']);
                $valor3 = intval($_GET['n3']);
              echo"<p>A base convertida fica: ". base_convert($valor1, $valor2, $valor3);
              }
            ?>
        </fieldset>
    </form>
</body>
</html>