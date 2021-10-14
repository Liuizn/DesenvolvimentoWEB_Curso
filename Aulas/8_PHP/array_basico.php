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

        #Arrays Sequenciais- numéricos
        $lista_frutas = array('Banana', 'Maçã', 'Manga', 'Uva'); #criando
        $lista_fruta = ['Banana', 'Maçã', 'Manga', 'Uva']; #criando de outra forma
        $lista_frutas[] = 'Kiwi'; #Inserindo novo elemento dentro do Array

        var_dump($lista_frutas); #Serve para mostrar o elementos dentro do array e a quantidade de caracteres inseridos
        echo ("<hr>");
        print_r($lista_frutas); #Serve para mostrar os elementos dentro do array apenas.
        echo ("<hr>");
        echo $lista_frutas[1]; #Buscando um array de posição 1

        echo ("<br>");
        echo ("<br>");
        echo ("<br>");
        echo ("<br>");

        #Associativos
        $lista_carros = array('c' => 'Corolla',
                              'a' => 'Aston Martin',
                              'l' => 'Lamborghini');
        var_dump($lista_carros);
        echo ("<hr>");
        echo $lista_carros['l'];
    ?>
</body>
</html>