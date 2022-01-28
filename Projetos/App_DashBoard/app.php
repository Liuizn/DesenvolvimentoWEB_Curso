<?php

class Dashboard {

	public $data_inicio;
	public $data_fim;
	public $numeroVendas;
	public $totalVendas;

	public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
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

	public function conectar() {
         try {
            $conexao = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                "$this->user",
                "$this->pass"
            );

            //
            $conexao->exec('set charset set utf8');

            return $conexao;

        } catch (PDOException $e) {
            echo '<p>'.$e.'</p>';
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

        public function getNumeroVendas() {
            $query = '
                select 
                    count(*) as numero_vendas 
                from 
                    tb_vendas 
                where 
                    data_venda between :data_inicio and :data_fim';
    
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':data_inicio', $this->dashboard->__get('data_inicio'));
            $stmt->bindValue(':data_fim', $this->dashboard->__get('data_fim'));
            $stmt->execute();
    
            return $stmt->fetch(PDO::FETCH_OBJ)->numero_vendas;
        }

        public function getTotalVendas() {
            $query = '
                select 
                    SUM(total) as total_vendas 
                from 
                    tb_vendas 
                where 
                    data_venda between :data_inicio and :data_fim';
    
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':data_inicio', $this->dashboard->__get('data_inicio'));
            $stmt->bindValue(':data_fim', $this->dashboard->__get('data_fim'));
            $stmt->execute();
    
            return $stmt->fetch(PDO::FETCH_OBJ)->total_vendas;
        }
    }


    $dashboard = new DashBoard();
    $conexao = new ConexaoBanco();
    
    $competencia = explode('-', $_GET["competencia"]);

    $ano = $competencia[0];
    $mes = $competencia[1];

    $totalDiasMes = cal_days_in_month(CAL_GREGORIAN, $mes, $ano);

    $dashboard->__set('data_inicio', $ano.'-'.$mes.'-01');
    $dashboard->__set('data_fim', $ano.'-'.$mes.'-'.$totalDiasMes);


    $banco = new Banco($conexao, $dashboard);
    
    $dashboard->__set('numeroVendas', $banco->getNumeroVendas());    
    $dashboard->__set('totalVendas', $banco->getTotalVendas());
    echo json_encode($dashboard); 

?>