	<?php error_reporting(E_ALL);


	$to = 'alanzvinicius@gmail.com';
	$subject = $_REQUEST['name'];
	$email   = $_REQUEST["email"];
	$message = $_REQUEST['comments'];
	
	$header = "from:$email\n";
	$header.= "MIME-Version: 1.0\r\n";
	$header.= "Content-Type: text/plain; charset=utf-8\r\n";
	$header.= "X-Priority: 1\r\n";

	$envioEmail = mail($to,$subject,$message,$header);
	echo  "sucess";
	
	


