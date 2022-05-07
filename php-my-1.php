<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8'0
    $mail->setLanguage('ru','phpmailer/language/');
    $mail->IsHTML(true);

    $mail->addAddress('zhaksylykbakdaulet@gmail.com');

    $body.='<p><strong>Имя:</strong> '.$_POST['name']. '</p>';
    $body.='<p><strong>Номер:</strong> '.$_POST['number']. '</p>';
    $body.='<p><strong>Коментарий:</strong> '.$_POST['comment']. '</p>';

    $mail->Body = $body;

?>