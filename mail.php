<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require "PHPMailer/src/Exception.php";
    require "PHPMailer/src/PHPMailer.php";
 
	$mail = new PHPMailer(true); /* Создаем объект MAIL */
	$mail->CharSet = "UTF-8"; /* Задаем кодировку UTF-8 */
	$mail->IsHTML(true); /* Разрешаем работу с HTML */

	$name = $_POST["gos-namber"]; 
	$name1 = $_POST["trancport"]; 
	$name2 = $_POST["data-pribit"]; 
	$name3 = $_POST["fio"]; 
	$name4 = $_POST["seria"]; 
	$name5 = $_POST["namber2"]; 
	$name6 = $_POST["vidan"]; 
	$name7 = $_POST["kogda-vidan"]; 

	$body = $name . ' ' . $name1 . ' ' . $name2 . ' ' . $name3 . ' ' . $name4 . ' ' . $name5 . ' ' . $name6 . ' ' . $name7;

	$theme = "[Заявка с формой]";

	$mail->addAddress("cherepanov3496@gmail.com");
	$mail->Subject = $theme;
	$mail->Body = $body;

	$mail->send();
 