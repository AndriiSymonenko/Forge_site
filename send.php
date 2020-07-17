<?php

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];

	$sub = "Сообщение с сайта Кузня на конной";

	$address = "exp@gmail.com";//адрес куда будет отсылаться сообщение для администратора
	$mes  = "Имя: $name \n";
	$mes .= "E-mail: $email \n";	//в этих строчках мы заполняем текст сообщения. С помощью оператора .= мы просто дополняем текст в переменную
	$mes .= "Телефон: $phone \n";
	
	$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");//собственно сам вызов функции отправки сообщения на сервере
// 		 
header('Refresh: 1; URL='.$_SERVER['HTTP_REFERER']);
exit()

?>