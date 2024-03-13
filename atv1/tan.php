<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tangente</title>
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
            font-weight 400;
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
    <h1>Tangente</h1>
    <h2>Tangente é uma função trigonométrica calculada a partir da divisão entre os catetos oposto e adjacente de um triângulo retângulo. </h2>

    <div class="pcentral">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
        <fieldset>
            <label for="idade">numero</label> <br>
            <input type="number" name="n1">
            <br><br>
            <input type="submit" value="calcular">
            <br>
            <?php
                if(isset($_GET['n1'])) {
                  $valor = $_GET['n1'];
                  echo"<p>A tangente do número é: ".(tan($valor));;
                }
            ?>
        </fieldset>
    </form>
    </div>
</body>
</html>