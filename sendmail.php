<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'phpmailer/language/');
$mail->IsHTML(true);

//От кого письмо
$mail->Host       = '25:465:587'; // SMTP сервера вашей почты!!!
$mail->Username   = 'proverka@pochtatest.site'; // Логин на почте!!!
$mail->Password   = '13245'; // Пароль на почте!!!
$mail->SMTPSecure = 'ssl'; 
$mail->Port       = 465;
$mail->setFrom('proverka@pochtatest.site', 'LIGHT TRUCKING'); // Адрес самой почты и имя отправителя!!!
//Кому отправить
$mail->addAddress('proverkaemailg@gmail.com'); // На какую почту будут приходить заявки !!!
//Тема письма
$mail->Subject = 'Заявка';

?>