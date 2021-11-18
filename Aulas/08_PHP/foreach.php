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
    
        $itens = ['sofá', 'cadeira', 'geladeira', 'mesa', 'fogão'];

        echo '<pre>';
        print_r($itens);
        echo '</pre>';

        foreach($itens as $item){
            echo '<pre>';
            echo $item;
            echo '</pre>';


            if ($item == 'geladeira'){
                echo 'geladeira gela geleira';
            }
        }
    ?>
</body>
</html>