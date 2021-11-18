<?php

    $numeros = array();

    while(count($numeros) <= 5){
        $num = rand(1, 60);

        if (!in_array($num, $numeros)) {
            $numeros[] = $num;
        }
    }

    print_r($numeros);
?>