<?php

    namespace App\Controllers;

    use App\Connection;
    use App\Models\Produto;
    use MF\Controller\Action;

    class IndexController extends Action
    {
        public function index()
        {
            // $this->view->dados = array('teste2', 'uhu2');
            $conn = Connection::getDb();
            
            $produto = new Produto($conn);

            $produtos = $produto->getProdutos();
            
            @$this->view->dados = $produtos;

            $this->render('index', 'layout1');
        }

        public function sobreNos()
        {
            // $this->view->dados = array('teste', 'uhu');
            $this->render('sobreNos', 'layout2');
        }
    }
?>
