<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $number = 8.8;
    #Arredonda valor pra cima
    echo $number;
    echo("<br>");
    echo ceil($number);

    #Arredonda valor pra baixo
    echo("<hr>");
    echo $number;
    echo("<br>");
    echo floor($number);

    #Arredonda com base na fração 0 e 4 pra baixo. 5 a 9 pra cima
    echo("<hr>");
    echo $number;
    echo("<br>");
    echo round($number);
    $number2 = 8.4;
    echo("<br>");
    echo $number2;
    echo("<br>");
    echo round($number);

    #Gera um valor aleatório. (valor-inicial, valor-final)
    echo("<hr>");
    echo rand(0,10);


    ?>
</body>
</html>