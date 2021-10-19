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
    
        $funcionarios = ['joao', 'maria', 'duda'];
        
        echo '<pre>';
        print_r($funcionarios);
        echo '</pre>';

        foreach ($funcionarios as $idx => $nome_funcionario) {
            echo $nome_funcionario;
        }

    ?>
</body>
</html>