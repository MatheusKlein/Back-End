<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão inteira</title>
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
    <h1>Divisão inteira<h1>
    <h2>A divisão inteira retornará o quociente inteiro de uma divisão</h2>

    <div class="pcentral">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
        <fieldset>
            <label for="idade">número a ser dividido</label> <br>
            <input type="number" name="n1" id="idadejs">
            <br><br>
            <label for="numero">número que irá dividir</label> <br>
            <input type="number" name="n2" id="numerojs">
            <br><br>
            <input type="submit" value="calcular">
            <br>
            <?php
                if(isset($_GET['n1']) && isset($_GET['n2'])) {
                  $valor = $_GET['n1'];
                  $valor2 = $_GET['n2'];
                  echo"<p>O resultado é: ".(intdiv($valor, $valor2));;
                }
            ?>
        </fieldset>
    </form>
</body>
</html>