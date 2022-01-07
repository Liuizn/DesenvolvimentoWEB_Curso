<?php

    namespace App\Controllers;

    use MF\Controller\Action;

    class IndexController extends Action
    {
        public function index()
        {
            $this->view->dados = array('teste2', 'uhu2');
            $this->render('index', 'layout1');
        }

        public function sobreNos()
        {

            $this->view->dados = array('teste', 'uhu');
            $this->render('sobreNos', 'layout2');
        }
    }
?>
