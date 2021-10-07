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
        $text = 'cOmplete course of PHP';
        #string to lower
        echo $text;
        echo ("</br>");
        echo strtolower($text);

        #upper case first
        echo ("</br>");
        echo ucfirst($text);
        
        #string length
        echo ("</br>");
        echo strlen($text);

        #String Replace
        echo ("</br>");
        $texto = 'vou ser alterado';
        echo $texto;
        echo ("</br>");
        echo str_replace('vou','vai', $texto);
        echo ("</br>");

        
        #Return part in String
        echo $texto;
        echo ("</br>");

        echo substr($texto, 4, 3);

    ?>
</body>
</html>