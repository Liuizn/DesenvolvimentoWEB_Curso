<?php 
    //requisição de arquivos privados
    require "../../APP_lista_tarefas_private/tarefa-model.php"; 
    require "../../APP_lista_tarefas_private/tarefa-services.php";
    require "../../APP_lista_tarefas_private/conect.php";

    $action = isset($_GET['acao']) ? $_GET['acao'] : $action;

    if (isset($_GET['action']) && $_GET['action'] == 'insert') {
        // instânciando a Classe Tarefa = tarefa-model.php
        $tarefa = new Tarefa();

        // definindo valor do input no atributo
        $tarefa->__set('tarefa', $_POST['tarefa']);

        // instânciando a Classe Conexao = conect.php
        $conexao = new Conexao();

        // instânciando a Classe ServiçosTarefa = tarefa-services.php
        $tarefaServices = new TarefaService($conexao, $tarefa);
        $tarefaServices->insert(); //envia a tarefa

        header('Location: nova_tarefa.php?inclusao=1'); //redirecionamento após execução 
    } else if($action == 'restore') {
        // instânciando a Classe Tarefa = tarefa-model.php
        $tarefa = new Tarefa();
        // instânciando a Classe Conexao = conect.php
        $conexao = new Conexao();
        // instânciando a Classe ServiçosTarefa = tarefa-services.php
        $tarefaServices = new TarefaService($conexao, $tarefa);
        $tarefas = $tarefaServices->restore();
    }

?>