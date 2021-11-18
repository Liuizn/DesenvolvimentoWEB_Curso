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
        $lista_coisas = [];
        $lista_coisas = ['teste'];
        $lista_coisas['teste'] = ['oi lindo'];
        $lista_coisas['frutas'] = ['maça', 'couve', 'tomate', 'cereja'];
        print_r($lista_coisas['frutas']);
        print_r($lista_coisas['teste']);
    ?>
</body>
</html>