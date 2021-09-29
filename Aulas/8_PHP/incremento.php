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
        
        #Pós-incremento é acrescentado após o retorno dele
        $teste = 1;
        $tesste = 2;
        $testeD= 1;
        $tessteD = 2;

        echo ("$teste atual");
        echo ('<br>');
        echo ($teste++ . ' aplicando o incremento');
        echo ('<br>');
        echo ("$teste no pós-incremento");    
        
        echo ('<br>');
        #Pós-decremento é decrementado após o retorno dele
        echo ('<br>');

        echo ("$tesste atual");
        echo ('<br>');
        echo ($tesste-- . ' aplicando o decremento');
        echo ('<br>');
        echo ("$tesste no pós-decremento");    
        

        echo ('<br>');
        #Pré-incremento é acrescentado antes do retorno dele
        echo ('<br>');

        echo ("$testeD atual");
        echo ('<br>');
        echo (++$testeD . ' aplicando o incremento');
        echo ('<br>');
        echo ("$testeD no pré incremento");

        echo ('<br>');
        #Pré-decremento é acrescentado antes do retorno dele
        echo ('<br>');

        echo ("$tessteD atual");
        echo ('<br>');
        echo (--$tessteD . ' aplicando decremento');
        echo ('<br>');
        echo ("$tessteD no pré decremento");




    ?>
</body>
</html>