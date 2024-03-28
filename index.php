<?php
include_once('SendMailSmtpClass.php');

$host = 'ssl://smtp.mail.ru';
$port = 465;
$username = 'desimo123@mail.ru';
$password = 'fAqgGbdxjLpHcUWCcsVP';
$smtpFrom = 'desimo123@mail.ru';

$mail = new SendMailSmtpClass($username, $password, $host, $smtpFrom, $port);

$mailTo = 'ud.desimo@gmail.com';
$subject = 'тест';
$message = 'тест с компактного класса';
$header = "From: desimo123@mail.ru \r\n";
$header .= "Content-type: text/plain; charset=utf-8\r\n";
$message2 = 'тест стандарт';

if ($mail->send($mailTo, $subject, $message, $headers)){
    echo "УСПЕХ. компактный класс <br>";
} else {
    echo "ОШИБКА. компактный класс <br>";
};

if (mail($mailTo, $subject, $message2, $header)) {
    echo "УСПЕХ. стандартный <br>";
} else {
    echo "ОШИБКА. стандартный <br>";
}
