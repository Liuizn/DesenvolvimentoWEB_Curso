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
    
        $registros = array('Amanda', 'Zahir', 'liuizn', 'su');
        print_r($registros);


        #Percorrendo com o While
        $i = 0;
        echo "<br><br>";
        while($i < count($registros)){
            echo "<br>";
            echo $i;
            echo "<br>";
            echo $registros[$i];
            $i++;
        }

        echo "<br>";
        echo "<br>";
        echo "<br>";

        #Pecorrendo com o DoWhile
        $a = 0;
        do {
            echo "<br>";
            echo $a;
            echo "<br>";
            echo $registros[$a];
            $a++;
        } while ($a < count($registros));

        echo "<br>";
        echo "<br>";
        echo "<br>";

        #Pecorrendo com For
        for ($i=0; $i < count($registros); $i++) { 
            echo "<br>";
            echo $i;
            echo "<br>";
            echo $registros[$i];
        }
    ?>
</body>
</html>