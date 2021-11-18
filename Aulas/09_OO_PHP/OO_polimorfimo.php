<?php 

    class Veiculo 
    {
        public $placa = null;
        public $cor = null;

        function acelerar()
        {
        
        }
 
        function freiar(){

        }

        function trocarMarcha(){
            echo 'troca marcha';
        }
    }

    class ClassName extends Veiculo
    {
        public $tetoSolar = null;
        
        function abrirTetoSolar()
        {

        }

        function trocarPosicaoVolante()
        {

        }
    }

    class Moto extends Veiculo
    {
        public $contraPesoGuiado = null;

        function empinar()
        {
            
        }

        function trocarMarcha(){
            echo 'troca marcha com o pé';
        }
    }