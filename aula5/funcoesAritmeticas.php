<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Funções aritiméticas no PHP </title>
    <style>
        h2 {
            font: 15pt Arial bolder;
            font-style: italic;
            color: #00008B;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
<div>
    <?php
    function soma($num1, $num2)
    {
        return $num1 + $num2;
    }

    function subtracao($num1, $num2)
    {
        return $num1 - $num2;
    }

    function multiplicacao($num1, $num2)
    {
        return $num1 * $num2;
    }

    function divisao($num1, $num2)
    {
        return $num1 / $num2;
    }

    $v1 = $_GET["x"];
    $v2 = $_GET["y"];

    echo "<h2>VALORES RECEBIDOS : $v1 E $v2</h2>";
    echo "<h2> SOMA: " . soma($v1, $v2) . "</h2>";
    echo "<h2> SUBTRAÇÃO: " . subtracao($v1, $v2) . "</h2>";
    echo "<h2> MULTIPLICAÇÃO: " . subtracao($v1, $v2) . "</h>";
    echo "<h2> DIVISÃO: " . divisao($v1, $v2) . "</h2>";

    //abs function
    echo "<h2>O valor absoluto de $v2 é " . abs($v2) . " </h2>";
    //pow function
    echo "<h2>O valor de $v1<sup>$v2</sup> é " . pow($v1, $v2) . " </h2>";
    //sqrt function
    echo "<h2>O valor de $v1 é " . sqrt($v1) . " </h2>";
    //round function
    echo "<h2>O valor de $v2 arredondado é " . round($v2) . " </h2>"; //ceil -> "arredonda pra cima" floor -> "arredonda pra baixo"
    //intval funcrtion
    echo "<h2>O valor de inteiro de  $v2 é " . intval($v2) . " </h2>";
    //nunber_format function
    echo "<h2>O valor de $v1 em moeda é R$" . number_format($v1, 2, ",", ".") . " </h2>";//respectivamente $v1, 2, ",", "." -> valor casas decimais separadore de decimal separador de milhar.



?>
</div>
</body>
</html>
