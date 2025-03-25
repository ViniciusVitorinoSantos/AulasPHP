<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <?php
    $a = $_GET["a"];
    $b = $_GET["b"];
    $tipo = $_GET["op"];
    echo"<h2>Os valores passados foram $a e $b</h2>";
    $resultado = $tipo == "s" ? $a + $b : $a * $b;
    echo"<h2>O resultado da operação é $resultado</h2>";
    "<br>";
    echo"A VERSÃO DO PHP É ". PHP_VERSION;
    echo"O SISTEMA OPERACIONAL QUE O PHP ESTÁ RODANDO É ". PHP_OS ."<br>";
    echo"O NOME DO SCRIPT É ". __FILE__;

    ?>
</div>
</body>
</html>
