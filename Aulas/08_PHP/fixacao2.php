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


        function calculaImposto(){
            $salario = 5000;
            $imposto = 0; 
            if ($salario <= 1903.98) {
                echo ('Insento');
            } else if (($salario >= 1903.99) && ($salario <= 2826.65)){
                $imposto = ($salario * 7.5) / 100;
                echo ($imposto);
            } else if (($salario >= 2826.66) && ($salario <= 3751.05)) {
                $imposto = ($salario * 15) / 100;   
                echo ($imposto);
            } else if (($salario >= 3751.06) && ($salario <= 4664.68))  { 
                $imposto = ($salario * 22.5) / 100;
                echo ($imposto);

            } if ($salario > 4664.68) {
                $imposto = ($salario * 27.5) / 100;
                echo ($imposto);
            }
        }

        calculaImposto();

    ?>
</body>
</html>