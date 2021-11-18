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
        # in_array() true ou false para a pesquisa da existência de algum item dentro do array.
        # array_search() Retorna o índice do valor pesquisado se existir dentro do array.

        $lista_frutas = ['Banana', 'Maça', 'Morango','Uva'];
        print_r($lista_frutas);

        #Exemplo do in_array() se for true == 1, se for false == vazio
        echo in_array('Banana', $lista_frutas); #retorna 1
        echo in_array('Atlético', $lista_frutas); #retorna nada

        echo '<br>';
        #Exemplo do array_search() se for true retorna o valor, se não achar retorna NULL
        echo array_search('Banana', $lista_frutas); 
        echo '<br>';
        
    ?>
</body>
</html>