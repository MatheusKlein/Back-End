<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PI</title>
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
    <h1>Pi</h1>
    <h2>O número π é uma constante matemática que é razão entre o comprimento de uma circunferência e seu diâmetro.</h2>

    <div class="pcentral">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
        <fieldset>
            <?php
              echo "<p>O valor de PI é ".pi()."</p>";
            ?>
        </fieldset>
    </form>
</body>
</html>