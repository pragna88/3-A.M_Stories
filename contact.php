<?php

$db_host='localhost';
//$db_post='3306';
$db_user='root';
$db_pass='';
$db_name='demo';
$connect=mysql_connect($db_host,$db_user,$db_pass) or die("Die bitch");
mysql_select_db($db_name);


if( isset($_POST['n']) && isset($_POST['e']) && isset($_POST['m']) ){
	$n = $_POST['n']; // HINT: use preg_replace() to filter the data
	$e = $_POST['e'];
	$m = nl2br($_POST['m']);
	
	if( mysql_query("INSERT INTO contact values('$n','$e','$m')")) {
		echo "success";
	} else {
		echo "The server failed to send the message. Please try again later.";
	}
}
?>