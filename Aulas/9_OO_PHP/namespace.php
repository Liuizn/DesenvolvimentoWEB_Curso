<?php 

namespace A;

interface CadastroInterface{
    public function adicionar();
}

class Cliente implements \B\CadastroInterface
{
    public $nome = "bruno";
    
    public function excluir(){
        echo "Exclui";
    }

    public function __get($atribute){
        return $this->$atribute;
    }
}

namespace B;

interface CadastroInterface {
    public function excluir();
}

class Cliente implements \A\CadastroInterface
{

    public $nome = "luiz";
    
    public function adicionar()
    {
        echo "adcionei";
    }

    public function __get($atribute){
        return $this->$atribute;
    }

}


?>