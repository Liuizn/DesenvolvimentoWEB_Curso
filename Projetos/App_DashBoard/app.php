<?php

    class DashBoard {
        public $data_inicio;
        public $data_fim;
        public $numeroVendas;
        public $totalVendas;
        public $clientesAtivos;
        public $clientesInativos;
        public $totalReclamacoes;
        public $totalElogios;
        public $totalSugestoes;
        public $totalDespesas;


        public function __get($atributo) 
        {
            return $this->$atributo;
        }

        public function __set($atributo, $valor)
        {
            $this->$atributo = $valor;
            return $this;
        }
    }

    class ConexaoBanco
    {
        private $host = 'localhost';
        private $dbname = 'dashboard';
        private $user = 'root';
        private $pass = '';

        public function conectar()
        {
            try 
            {
                $conexao = new PDO(
                    "mysql:host=$this->host;
                     dbname:dbname=$this->dbname;",
                    "$this->user",
                    "$this->pass"
                );

                $conexao->exec('set charset set utf8');

                return $conexao;
            } 
            catch (PDOException $erro) 
            {
                echo $erro;
            }
        }
    }
    
    class Banco
    {
        private $conexao;
        private $dashboard;

        public function __construct(ConexaoBanco $conexao, Dashboard $dashboard)
        {
            $this->conexao = $conexao->conectar();
            $this->dashboard = $dashboard;
        }   

        public function getNumeroVendas()
        {
            $query = 'SELECT
                        COUNT(*) AS numero_vendas
                    FROM
                        tb_vendas
                    WHERE
                        data_venda BETWEEN :data_inicio AND :data_fim';

            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':data_inicio', $this->dashboard->__get('data_inicio'));
            $stmt->bindValue(':data_fim',  $this->dashboard->__get('data_fim'));
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_OBJ)->numero_vendas;
        }

        public function getTotalVendas()
        {
            $query = 'SELECT
                        SUM(total) AS total_vendas
                    FROM
                        tb_vendas
                    WHERE
                        data_venda BETWEEN :data_inicio AND :data_fim';

            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':data_inicio', $this->dashboard->__get('data_inicio'));
            $stmt->bindValue(':data_fim',  $this->dashboard->__get('data_fim'));
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_OBJ)->total_vendas;
        }
    }
    $conexao = new ConexaoBanco();
    $dashboard = new DashBoard();
    
    $dashboard->__set('data_inicio', '2018-08-01');
    $dashboard->__set('data_fim', '2018-08-31');

    $banco = new Banco($conexao, $dashboard);
    
    $dashboard->__set('numeroVendas', $banco->getNumeroVendas())    

?>