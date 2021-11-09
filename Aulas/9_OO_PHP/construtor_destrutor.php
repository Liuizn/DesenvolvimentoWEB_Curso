<?php 

class Pessoa {

    public $nome = null;
    
    function __construct($nome)
    {
        echo ('Iniciou');
        $this->nome = $nome;        
    }    
    
    function __get($atribute)
    {
        return $this->$atribute;
    }

    function correr()
    {
        return $this->__get('nome') . ' está correndo.';
    }

}
    $pessoa = new Pessoa('Luiz');
    echo "<br>";
    
    echo "<br>";
    echo $pessoa->correr();


?>