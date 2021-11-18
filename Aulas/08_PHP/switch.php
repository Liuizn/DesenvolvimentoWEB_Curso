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
    
        $escolha = 3;

        switch ($escolha) {
            case 1:
                echo ('escolhi 1');
                break;
            
            case 2:
                echo ('Escolhi 2');
                break;
            
            case 3:
                echo ('Escolhi 3');
                break;

            default:
                # code...
                break;
        }

    ?>
</body>
</html>