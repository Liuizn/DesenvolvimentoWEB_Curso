<?php

    namespace App\Controllers;

    class IndexController
    {

        private $view;
        public function __construct()
        {
            $this->view = new \stdClass();  
        }

        public function index(){
            $this->view->dados = array('teste2', 'uhu2');
            $this->render('index');
        }

        public function sobreNos(){

            $this->view->dados = array('teste', 'uhu');
            $this->render('sobreNos');
        }

        public function render($view) {
            $currentlClass = get_class($this);
            $currentlClass = str_replace('App\\Controllers\\', '', $currentlClass);
            $currentlClass = strtolower(str_replace('Controller', '', $currentlClass));
            require_once "../App/Views/".$currentlClass."/".$view.".phtml";
        }
    }
    



?>