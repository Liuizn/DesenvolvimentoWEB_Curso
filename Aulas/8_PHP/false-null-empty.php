<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?PHP
        #false = tipo booleano (true || false)
        #empty && null = tipos especiais

        $teste1 = null;
        $teste2 = ' ';
    #sobre tipos nulos
        if($teste1 == null) {
            echo 'variavel de tipo nulo';
        } else {
            echo ('variavel não nula');
        }

        echo '<br>';
    #sobre tipos vazios
        if ($teste2 == '') {
            echo "variavel empty, vazia";
        } else {
            echo "variavel não vazia";
        }


    ?>
</body>
</html>