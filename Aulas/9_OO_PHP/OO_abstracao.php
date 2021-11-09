<?php 
    // Entidade == Classe
    class Funcionario{

        // Característica == Atributo
        public $name = null;
        public $numberCellPhone = null;
        public $numberOfChilds = null;

        // Ação == Método

        function summaryOfFunctionary(){
            return 'teste';
        }

        function changeNumChilds($numChilds){
            $this->numberOfChilds = $numChilds;
        }
    }

    // Identidade == Objeto
    $rynaldo = new Funcionario(); 
    echo $rynaldo->summaryOfFunctionary();
    $rynaldo-> changeNumChilds(5);
    echo $rynaldo-> numberOfChilds;

?>