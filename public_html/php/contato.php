	<?php error_reporting(E_ALL);
	require_once "../php/recaptchalib.php";
	if($_POST){
	$to = 'alanzvinicius@gmail.com';
	$subject = $_REQUEST['name'];
	$email   = $_REQUEST["email"];
	$message = $_REQUEST['comments'];
	$secret = "6LcZlxwUAAAAANn6mg8RK-tB1fl3ozGwAlxuO2hd";
	$recaptcha = new Recaptcha($secret);
	$recaptchaResponse = $recaptcha->verifyResponse($_SERVER['REMOTE_ADDR'], $_POST['g-recaptcha-response']);
	$header = "from:$email\n";
	$header.= "MIME-Version: 1.0\r\n";
	$header.= "Content-Type: text/plain; charset=utf-8\r\n";
	$header.= "X-Priority: 1\r\n";
	if($recaptchaResponse != null && $recaptchaResponse->success ){
	$envioEmail = mail($to,$subject,$message,$header);
	echo  "<script> alert('Menssagem enviada com sucesso');
	window.history.go(-1); </script>\n";
	}
	else{
	echo "<script> alert('é necessário marcar o captcha!'); window.history.go(-1); </SCRIPT>\n";
	}
	}


