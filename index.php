<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variável</title>
    <style type="text/css">
        body {
            background-color: #a7bacc;
        }
        h1 {
            padding: 10px;
            color: #0f2336;
        }
        p {
            font-size: 18px; 
            margin: 5px;
        }
</style>
</head>
<body>
    <h1>Sobre mim</h1>
    <?php
    $nome = "Matheus";
    const SOBRENOME = "Klein";
    $idade = 16 ;
    $altura = 1.64 ;
    $peso = 50 ;
    echo "<p>Meu nome é $nome " . SOBRENOME. "</p>" ;
    echo "<p>Tenho $idade anos, minha altura é $altura e peso $peso kg.</p>"
        ?>
    
</body>
</html>