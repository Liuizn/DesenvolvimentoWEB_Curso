<?php 

namespace A;

interface CadastroInterface{
    public function registrar();
}

class Blibioteca implements CadastroInterface
{
    public $nome = "Bruno";
    
    public function __get($atribute)
    {
        return $this->$atribute;
    }

    public function apagar(){
        echo "apagar";
    }

    public function registrar(){
        echo "registrei";
    }

}


?>