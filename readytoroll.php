<?php
include 'sendmail.php';


//Тело письма
$body = '<h1>I\'M READY TO ROLL!</h1>';



if(trim(!empty($_POST['name']))){
	$body.='<p><strong>Имя:</strong> '.$_POST['name'].'</p>';
}
if(trim(!empty($_POST['lastname']))){
	$body.='<p><strong>Фамилия:</strong> '.$_POST['lastname'].'</p>';
}
if(trim(!empty($_POST['state']))){
	$body.='<p><strong>Страна:</strong> '.$_POST['state'].'</p>';
}
if(trim(!empty($_POST['email']))){
	$body.='<p><strong>Почта:</strong> '.$_POST['email'].'</p>';
}
if(trim(!empty($_POST['phone']))){
	$body.='<p><strong>Телефон:</strong> '.$_POST['phone'].'</p>';
}
if(trim(!empty($_POST['cdl']))){
	$body.='<p><strong>CDL-A:</strong> '.$_POST['cdl'].'</p>';
}
if(trim(!empty($_POST['drivertype']))){
	$body.='<p><strong>Driver Type:</strong> '.$_POST['drivertype'].'</p>';
}

$mail->Body = $body;

//Отправляем
if(!$mail->send()){
	$message = 'Ошибка';
} else {
	//$message = 'Данные отправлены';
}

$response = ['message' => $message];

header('Content-type: application/json');
echo json_encode($response);
?>
