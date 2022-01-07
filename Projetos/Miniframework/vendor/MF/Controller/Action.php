<?php

    namespace MF\Controller;

    abstract class Action
    {
        protected $view;

        public function __construct()
        {
            $this->view = new \stdClass();  
        }

        protected function render($view) 
        {
            $currentlClass = get_class($this);
            $currentlClass = str_replace('App\\Controllers\\', '', $currentlClass);
            $currentlClass = strtolower(str_replace('Controller', '', $currentlClass));
            require_once "../App/Views/".$currentlClass."/".$view.".phtml";
        }
    }
?>
