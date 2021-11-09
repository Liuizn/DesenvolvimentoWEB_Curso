<?php 
    // Entidade == Classe
    class Funcionario{

        // Característica == Atributo
        public $name = null;
        public $numberCellPhone = null;
        public $numberOfChilds = null;


        // Get e Set
        function setName($name){
            $this->name = $name;
        }

        function setNumberCellPhone($numberCellPhone){
            $this->numberCellPhone = $numberCellPhone;
        }

        function setNumberOfChilds($numberOfChilds){
            $this->numberOfChilds = $numberOfChilds;
        }

        function getName(){
            return $this->name;
        }

        function getNumberCellPhone() {
            return $this->numberCellPhone;
        }

        function getNumberOfChilds(){
            return $this->numberOfChilds;
        }

        // Ação == Método

        function summaryOfFunctionary(){
            return "$this->name possui $this->numberOfChilds Filhos.";
        }

    }

    // Identidade == Objeto
    $rynaldo = new Funcionario();
    $rynaldo->setName('Rynaldo');
    $rynaldo->setNumberOfChilds(4);
    echo $rynaldo->summaryOfFunctionary();
    

?>