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
        #gettype() == retorna o tipo da variável
        $tipo_int = 23;

        #fazendo casting da váriavel inteira para float
        $tipo_float = (float) $tipo_int;


        echo gettype($tipo_int);
        echo ('<br>');
        echo gettype($tipo_float);

    ?>
</body>
</html>