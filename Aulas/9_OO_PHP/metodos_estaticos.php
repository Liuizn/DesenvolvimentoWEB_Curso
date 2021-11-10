<?php 

    class Exemplo 
    {
        public static $atributo1 = 'sou estático';
        public $atributo2 = 'não sou estático';

        public static function metodo1(){
            echo "sou estático metodo";
        }

        public function metodo2(){
            echo "não sou estático método";
        }
    }
    
    Echo Exemplo::$atributo1;
    Exemplo::metodo1();

?>