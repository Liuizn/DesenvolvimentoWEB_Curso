<?php

    class TarefaService
    {

        private $conexao;
        private $tarefa;

        public function __construct(Conexao $conexao, Tarefa $tarefa)
        {
            $this->conexao = $conexao->conect();
            $this->tarefa = $tarefa;
        }

        //métodos do CRUD

        public function insert() {
            $query = 'insert into tarefas (tarefa) values (:tarefa)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
            $stmt->execute();
        }

        public function restore() {
            $query = 'select tarefas.id, situacao.status, tarefas.tarefa from tarefas left join situacao on (tarefas.id_status = situacao.id)';
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function update() {

        }

        public function delete() {
            
        }
    }
    



?>