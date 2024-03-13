<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosseno</title>
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
    <h1>Cosseno</h1>
    <h2>O cosseno é a razão entre a medida do cateto oposto sobre o valor da hipotenusa.</h2>

    <div class="pcentral">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
        <fieldset>
            <label for="idade">numero</label> <br>
            <input type="number" name="val">
            <br><br>
            <input type="submit" value="calcular">
            <br>
            <?php
                if(isset($_GET["val"])) {
                  $val = $_GET["val"];;
                  echo"<p>O cosseno do número é: ".(cos($val));
                }
            ?>
        </fieldset>
    </form>
    </div>
</body>
</html>