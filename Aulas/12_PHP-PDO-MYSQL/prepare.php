<?php

    if (!empty($_POST['user']) && !empty($_POST['password'])) 
    {       
        print_r($_POST);
        $dsn = 'mysql:host=localhost;dbname=php_pdo';
        $user = 'root';
        $password = '';
           
        try {
            $conect = new PDO($dsn, $user,$password);

            $query = "select * from user where ";
            $query .= "email = :user AND ";
            $query .= "senha = :senha";

            $stmt = $conect->prepare($query);
            $stmt->bindValue(':user', $_POST['user']);
            $stmt->bindValue(':senha', $_POST['password']);

            $stmt->execute();
            $usuario = $stmt->fetch();


            echo '<pre>';
            print_r($usuario);
            echo '</pre>';

        } catch (PDOException $E) {
            echo 'Erro: '.$E->getCode(). ' Mensagem: '. $E->getMessage();
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method='post'>
        <input type="text" name="user" id="" placeholder='user'>
        <br>
        <input type="password" name="password" id="" placeholder='password'>
        <br>
        <input type="submit" value="enviar">
    </form>
</body>

</html>