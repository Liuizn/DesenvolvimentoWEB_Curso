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
        #recuperar data atual date('dia','mes','ano' 'horas:minutos')
        echo ('<hr>');

        date_default_timezone_set('America/Sao_Paulo'); #setando fuso horário
        echo date_default_timezone_get(); #mostrando fuso horário
        echo ('<br>');
        echo date('d/m/Y H:i'); #mostrando data
        echo ('<hr>');


        $data_inicial = '2021-02-23';
        $data_final = '2022-02-23';

        #timestamp 01/01/1970
        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final);

        $diferenca_times = $time_final - $time_inicial;

        echo $diferenca_times;
    ?>
</body>
</html>