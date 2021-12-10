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
            $query = 'insert into tarefas (tarefa) values (?)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->tarefa->__get('tarefa'));
            $stmt->execute();
        }

        public function restore() {
            $query = 'select tarefas.id, situacao.status, tarefas.tarefa from tarefas left join situacao on (tarefas.id_status = situacao.id)';
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function restore_pending(){
            $query = 'select tarefas.id, situacao.status, tarefas.tarefa from tarefas left join situacao on (tarefas.id_status = situacao.id) where tarefas.id_status = 1';
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function update() {
            $query = 'update tarefas set tarefa = ? where id = ?';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->tarefa->__get('tarefa'));
            $stmt->bindValue(2, $this->tarefa->__get('id'));
            return $stmt->execute();
        }

        public function delete() {
            $query = 'delete from tarefas where id = ?';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->tarefa->__get('id'));
            return $stmt->execute();
        }

        public function toggle(){
            $query = 'update tarefas set id_status = 2 where id = ?';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->tarefa->__get('id'));
            return $stmt->execute();
        }

    }
    



?>