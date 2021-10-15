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
        #Funções para manipular arrays.
    
        #is_arraY() Esta função serve para verificar se uma variável armazena ou não um array.
        $arrayExemplo = ['teste','alo','uhu'];
        $arrayExemplo2= ['a' => 1, 'b' => 2, 'c' => 3];
        $arrayExemplo3= ['a' => 3, 'b' => 2, 'c' => 1];
        $NarrayExemplo = 1;
        #vai retornar true
        if (is_array($arrayExemplo)) {
            echo 'é um array';
        } else {
            echo 'não é um array';
        }
        echo '<br>';
        #vai retornar false
        if(is_array($NarrayExemplo)){
            echo 'é um array';
        } else {
            echo 'não é um array';
        }
        echo "<hr>";

        #array_keys() Esta função é resposável por retornar os indíces em sua respectiva ordem.
        print_r($arrayExemplo2);
        echo "<br>";
        $arrayArmazenandoIndices = array_keys($arrayExemplo2);
        print_r($arrayArmazenandoIndices);
        echo "<hr>";

        #sort() É uma função que ordena os valores em ordem alfabética e ajusta os indices
        print_r($arrayExemplo);
        sort($arrayExemplo);
        echo "<br>";
        print_r($arrayExemplo);
        echo "<hr>";

        #asort() É uma função que ordena os valores porem mantém o seus indices
        print_r($arrayExemplo3);
        asort($arrayExemplo3);
        echo "<br>";
        print_r($arrayExemplo3);
        echo "<hr>";

        #count() É uma função que retorna em um valor int a quantidade de elementos dentro de um array
        print_r($arrayExemplo3);
        echo "<br>";
        echo count($arrayExemplo3);
        echo "<hr>";

        #array_merge() É uma função que junta um array ou mais em um.
        print_r($arrayExemplo);
        echo "<br>";
        print_r($arrayExemplo2);
        echo "<br>";
        print_r($arrayExemplo3);
        echo "<br>";
        $arrayMerge = array_merge($arrayExemplo, $arrayExemplo2);
        echo "<pre>";
        print_r($arrayMerge);
        echo "</pre>";
        echo "<hr>";

        #explode() Função que divida uma variável em um array.
        $palavra = 'n-e-y-m-a-r';
        echo $palavra;
        echo "<br>";
        $arrayPalavra = explode('-', $palavra);
        print_r($arrayPalavra);
        echo "<hr>";

        #implode() Função que junta um array em uma string.
        $arrayPalavra2 = ['n', 'e', 'y', 'm', 'a', 'r'];
        print_r($arrayPalavra2);
        echo "<br>";
        $palavra2 = implode('', $arrayPalavra2);
        echo $palavra2;
    ?>
</body>
</html>