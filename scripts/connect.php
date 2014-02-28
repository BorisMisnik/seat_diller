<?php
	$dev = $_SERVER['SERVER_NAME'] == 'localhost'; // development version

	define('D_DB_HOST', $dev ? 'localhost' : 'seat2013.mysql');
	define('D_DB_USER', $dev ? 'root' :'seat2013_mysql');
	define('D_DB_PASS', $dev ? '' : 'tmegnbyz');
	define('D_DB_NAME', 'seat2013_db');

	$db = mysql_connect(D_DB_HOST, D_DB_USER, D_DB_PASS) or die('Dosent connect');
	mysql_set_charset('UTF-8');
	mysql_query('SET NAMES utf8') or header('Location: Error');
 
	mysql_select_db(D_DB_NAME) or die (mysql_error());
?>