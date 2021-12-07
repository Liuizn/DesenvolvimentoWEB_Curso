<?php

    $dsn = 'mysql:host=localhost;dbname=php_pdo';
    $user = 'root';
    $password = '';



    try {
        $conect = new PDO($dsn, $user,$password);

        $query = 'create table if not exists user(
            id_user int not null primary key auto_increment,
            name varchar(60) not null,
            email varchar(100) not null,
            password varchar(32) not null
        )';

        $conect->exec($query);
        
        $query = 'insert into user(name, email, password) values ("Luiz", "Luiz@gmail.com", "123456")';
        
        $conect->exec($query);
        
    } catch (PDOException $E) {
        
        echo 'Erro: '.$E->getCode(). ' Mensagem: '. $E->getMessage();
        // Registro de erros 
    }




?>
