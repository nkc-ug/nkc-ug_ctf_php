<?php
	
	//全エラーを出力
	ini_set("display_errors", 1);
	error_reporting(E_ALL);
	
	//mysql -h 127.0.0.1 -P 4306 -u root -propa20932060 app
	//$db = new pdo("mysql:host=nkc-ug_ctf_mysql_1;dbname=app;charset=utf8mb4","root","ropa20932060");
	$db = new pdo("mysql:host=nkc-ug_ctf_php_mysql_1;dbname=app;charset=utf8mb4","root","ropa20932060");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
	
?>