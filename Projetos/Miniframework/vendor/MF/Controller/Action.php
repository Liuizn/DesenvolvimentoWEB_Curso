<?php

    namespace MF\Controller;

    abstract class Action
    {
        protected $view;

        public function __construct()
        {
            $this->view = new \stdClass();  
        }

        protected function render($view, $layout) 
        {
            $this->view->page = $view;
            if (file_exists("../App/Views/".$layout.".phtml")) 
            {
                require_once "../App/Views/".$layout.".phtml";
            } 
            else
            {
                $this->content();
            }
        }
        
        protected function content()
        {
            $currentlClass = get_class($this);
            $currentlClass = str_replace('App\\Controllers\\', '', $currentlClass);
            $currentlClass = strtolower(str_replace('Controller', '', $currentlClass));
            require_once "../App/Views/".$currentlClass."/".$this->view->page.".phtml";
        }
    }
?>
