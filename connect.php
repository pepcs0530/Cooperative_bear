<?php
    $db_host = "161.246.58.23";
    $db_username = "papza007";
    $db_password = "123456";
    $db_name = 'cooperative_bear';
    mysql_connect("$db_host","$db_username","$db_password") or die ("Cound not connect to mysql");
    mysql_select_db("$db_name") or die ("No database");
    mysql_query("SET NAMES utf8");
    mysql_query("SET time_zone = '+7:00'");
    date_default_timezone_set('Asia/Bangkok');
	
	/*define(DBSERVER,"http://161.246.58.23/phpmyadmin");
	define(DBNAME,"cooperative_bear");
	define(DBUSER,"root");
	define(DBPASS,"1100800930026");
	mysql_connect(DBSERVER,DBUSER,DBPASS) or die("cannot connect server");*/
?>