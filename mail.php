<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require "PHPMailer/src/Exception.php";
    require "PHPMailer/src/PHPMailer.php";
 
	$mail = new PHPMailer(true); /* Создаем объект MAIL */
	$mail->CharSet = "UTF-8"; /* Задаем кодировку UTF-8 */
	$mail->IsHTML(true); /* Разрешаем работу с HTML */

	$name = $_POST["gos-namber"]; /* Принимаем имя пользователя с формы .. */
	$name1 = $_POST["trancport"]; /* Почту */
	$name2 = $_POST["data-pribit"]; /* Телефон */
	$name3 = $_POST["fio"]; /* Сообщение с формы */
	$name4 = $_POST["seria"]; /* Сообщение с формы */
	$name5 = $_POST["namber2"]; /* Сообщение с формы */
	$name6 = $_POST["vidan"]; /* Сообщение с формы */
	$name7 = $_POST["kogda-vidan"]; /* Сообщение с формы */

	$body = $name . ' ' . $name1 . ' ' . $name2 . ' ' . $name3 . ' ' . $name4 . ' ' . $name5 . ' ' . $name6 . ' ' . $name7;

	$theme = "[Заявка с формой]";

	$mail->addAddress("cherepanov3496@gmail.com");
	$mail->Subject = $theme;
	$mail->Body = $body;

	$mail->send();
 