<?php 

namespace B;

interface CadastroInterface{
    public function apagar();
}

class Blibioteca implements CadastroInterface
{
    public $nome = "Bruno";
    
    public function __get($atribute)
    {
        return $this->$atribute;
    }

    public function registrar(){
        echo "registrei";
    }

    public function apagar(){
        echo "apaguei";
    }
}

?>