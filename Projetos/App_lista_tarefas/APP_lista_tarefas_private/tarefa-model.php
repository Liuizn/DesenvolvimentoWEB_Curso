<?php

    class Tarefa
    {
        private $id;
        private $id_status;
        private $tarefa;
        private $data_cadastro;

        public function __get($att) {
            return $this->$att;
        }

        public function __set($att, $value){
            $this->$att = $value;
        }

    }
    


?>