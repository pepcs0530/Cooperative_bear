<?php
    $db_host = "161.246.58.23";
    $db_username = "hmeeza007";
    $db_password = "123456";
    $db_name = 'cooperative_bear';
    mysql_connect("$db_host","$db_username","$db_password") or die ("Cound not connect to mysql");
    mysql_select_db("$db_name") or die ("No database");
    mysql_query("SET NAMES utf8");
    mysql_query("SET time_zone = '+7:00'");
    date_default_timezone_set('Asia/Bangkok');
 ?>

<?php

	$username = $_GET['username'];
	$password = $_GET['password'];

	$sql = "SELECT * FROM cb_account 
	where Cb_Ac_Id = '$username' 
		and Cb_Ac_Password = '$password'";
    $result = mysql_query($sql);
    $count = mysql_num_rows($result);
    if($count>0){
    	echo "Success!";
    }else{
    	echo "Fail!";
    }
?>
