<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phprocessa</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <div class="pcentral">
        <?php
        $nome = $_GET ["nome"];
        $sobrenome = $_GET ["sobrenome"];
        $idade = $_GET ["idade"];
        $peso = $_GET ["peso"];
        $altura = $_GET ["altura"];

        echo "<p>Meu nome é $nome " . " $sobrenome, </p>" ;
        echo "<p>tenho $idade anos,</p>";
        echo "<p>minha altura é $altura,</p>";
        echo "<p>peso $peso kg.";
        ?>
    </div>
</body>
</html>