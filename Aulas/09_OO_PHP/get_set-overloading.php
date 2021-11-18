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

        // Get e Set Overloading (Sobrecarga)

        function __set($name, $value)
        {
            $this->$name = $value;
        }

        function __get($name) {
            return $this->$name;
        }

        // Ação == Método

        function summaryOfFunctionary(){
            return $this->__get('name') .  ' possui ' .  $this->__get('numberOfChilds') . ' Filhos.';
        }

    }

    // Identidade == Objeto
    $rynaldo = new Funcionario();
    $rynaldo->__set('name', 'Rynaldo');
    $rynaldo->__set('numberOfChilds', '8');
    echo $rynaldo->summaryOfFunctionary();
    

?>