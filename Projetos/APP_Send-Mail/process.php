<?php 

require "./bibliotecas/PHPMailer/Exception.php";
require "./bibliotecas/PHPMailer/OAuth.php";
require "./bibliotecas/PHPMailer/PHPMailer.php";
require "./bibliotecas/PHPMailer/POP3.php";
require "./bibliotecas/PHPMailer/SMTP.php";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class Mensage
{
    private $reciever = null; 
    private $subject = null;
    private $mensage = null;
    public $status = Array('codigo_status' => null, 'descricao_status' => '');

    public function __get($atribute) {
        return $this->$atribute;
    }

    public function __set($atribute, $value) {
        $this->$atribute = $value;
    }

    public function validMensage() {
        if (empty($this->reciever) || empty($this->subject) || empty($this->mensage)) {
            return false;
        }
        return true;
    }
}

$mensagem = new Mensage();

$mensagem->__set('reciever',$_POST['reciever']);
$mensagem->__set('subject', $_POST['subject']);
$mensagem->__set('mensage', $_POST['mensage']);

if (!$mensagem->validMensage()) {
    echo "Mensagem Inválida";
    header('Location: index.php');
}

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = false;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'liuiznteamcontact@gmail.com';                     //SMTP username
    $mail->Password   = 'luizteste12.';                               //SMTP password
    $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('liuiznteamcontact@gmail.com', 'liuizn contact');
    $mail->addAddress($mensagem->__get('reciever'));     //Add a recipient
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $mensagem->__get('subject');
    $mail->Body    = $mensagem->__get('mensage');
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

    $mensagem->status['codigo_status'] = 1;
    $mensagem->status['descricao_mensagem'] = 'Conseguimos enviar o seu E-mail';
} catch (Exception $e) {
    $mensagem->status['codigo_status'] = 2;
    $mensagem->status['descricao_mensagem'] = 'Não foi possível enviar o seu E-mail. ERRO: ' . $mail->ErrorInfo;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>App Mail Send</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="py-3 text-center">
            <img class="d-block mx-auto mb-2" src="logo.png" alt="" width="72" height="72">
            <h2>Send Mail</h2>
            <p class="lead">Seu app de envio de e-mails particular!</p>
        </div>
        <div class="row">
            <div class="col-md-12">

                <?php
                    if($mensagem->status['codigo_status'] == 1) { ?>

                        <div class="container">
                            <h1 class="display-4 text-success">Sucesso</h1>
                            <p><?php $mensagem->status['descricao_mensagem']; ?></p>
                            <a href="index.php" class="btn btn-success btn-lg mt-5 text-white">Voltar</a>
                        </div>

                <?php }; ?>

                <?php
                    if($mensagem->status['codigo_status'] == 2) { ?>

                        <div class="container">
                            <h1 class="display-4 text-danger">Erro</h1>
                            <p><?php $mensagem->status['descricao_mensagem'];?></p>
                            <a href="index.php" class="btn btn-danger btn-lg mt-5 text-white">Voltar</a>
                        </div>

                <?php }; ?>

            </div>
        </div>
    </div>
</body>

</html>