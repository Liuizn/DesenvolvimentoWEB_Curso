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

    $idade = 16;
    $peso = 51.3;

    if(($idade >= 16 && $idade <= 69) && ($peso >= 50 )) {
        echo ('atende aos requisitos');
    } else {
        echo ('não atende aos requisitos');
    }

?>
</body>
</html>