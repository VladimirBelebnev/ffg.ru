<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

$title = "Новое письмо";

$c = true;

$title = "Новое письмо";
foreach ( $_POST as $key => $value ) {
  if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
    $body .= "
    " . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
      <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
      <td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
    </tr>
    ";
  }
}

$body = "<table style='width: 100%;'>$body</table>";

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->isSMTP();
$mail->CharSet = "UTF-8";
$mail->SMTPAuth   = true;

// Настройки вашей почты
$mail->Host       = 'smtp.ffgel.ru'; // SMTP сервера вашей почты
$mail->Username   = 'support@ffgel.ru'; // Логин на почте
$mail->Password   = 'begwad-nevvE5-wicbuh'; // Пароль на почте
$mail->SMTPSecure = 'ssl';
$mail->Port       = 465;

$mail->setFrom('support@ffgel.ru', 'Заявка с вашего сайта'); // Адрес самой почты и имя отправителя

// Получатель письма
$mail->addAddress('ffgel@mail.ru');

// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;

$mail->send();

if (!$mail->send()) {
  $message = 'Возникла ошибка';
} else {
  $message = 'Данные успешно отправлены!';
}

$response = ['message' => $message];

header('Content-type: application/json');
echo json_encode($response);