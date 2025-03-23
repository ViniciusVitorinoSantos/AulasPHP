<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Minha Página PHP</title>
</head>
<body>
<div>
    <p>operadores aritmérticos em PHP: Utilizando esses operadores, você poderá efetuar qualquer operação matemática
        comdados do tipo numérico, como, por exemplo, somar, subtrair, multiplicar, dividir etc. confira a tabela com os
        operadores aritméticos do PHP:</p>
    <table style="border-collapse: collapse; width: 50%;">
        <tr>
            <th style="border: 1px solid black; padding: 5px;">Operador</th>
            <th style="border: 1px solid black; padding: 5px;">Operação</th>
        </tr>
        <tr>
            <td style="border: 1px solid black; padding: 5px; " align="center">+</td>
            <td style="border: 1px solid black; padding: 5px; " align="center">Adição</td>
        </tr>
            <td style="border: 1px solid black; padding: 5px; " align="center">-</td>
            <td style="border: 1px solid black; padding: 5px; " align="center">Subtração</td>
        <tr>
            <td style="border: 1px solid black; padding: 5px; " align="center">*</td>
            <td style="border: 1px solid black; padding: 5px; " align="center">Multiplicação</td>
        </tr>
        <tr>
            <td style="border: 1px solid black; padding: 5px; " align="center">/</td>
            <td style="border: 1px solid black; padding: 5px; " align="center">divisão</td>
        </tr>
        <tr>
            <td style="border: 1px solid black; padding: 5px; " align="center">%</td>
            <td style="border: 1px solid black; padding: 5px; " align="center">Módulo (resto da divisão)</td>
        </tr>


        </tr>
    </table>
    <br>
    <?php
        echo "Tudo escrito em PHP <br>";
        echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ↓ <br>";
        $n1 = 3;
        $n2 = 2;
        echo "A variavel n1 vale: $n1 <br>";
        echo "A variavel n2 vale: $n2 <br>";
        echo "A soma vale ".($n1 + $n2). "<br>";
        echo "A subtração vale ".($n1 - $n2). "<br>";
        echo "A multiplicação vale ".($n1 * $n2). "<br>";
        echo "A divisão vale ".($n1 / $n2). "<br>";
        echo "O resto da divisão vale ".($n1 % $n2). "<br>";

    ?>
</div>
</body>
</html>
