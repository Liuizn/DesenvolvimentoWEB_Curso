<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
</head>
<body>
    
<?php 

    #variável tipo String
    $nome = 'luiz';
    echo ($nome);
?>
<br>
<?php
    #variável tipo int
    $idade = 18;
    echo ($idade);
?>
<br>
<?php
    #variável tipo float
    $peso = 75.4;
    echo ($peso);
?>
<br>
<?php
#variável tipo Boolean
    $atleticano = true;
    $cruzeirense = false;
    echo ($atleticano);
    echo ($cruzeirense);
?>

<br>

<?php 

    #variável tipo String
    $nome = 'luiz Alterado';
    echo ($nome);
?>

<br>

<?php

echo ('Olá' . $nome . 'tudo bem?, vi que vc tem ' . $idade . ' anos de idade. certo? e ' . $peso . ' também.')

?>


</body>
</html>