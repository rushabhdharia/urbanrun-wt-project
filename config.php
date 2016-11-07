<?php

	define('DBhost', 'localhost');
	define('DBuser', 'root');
	define('DBPass', '');
	define('DBname', 'register1');
	
	try {
		
		$DBcon = new PDO("mysql:host=".DBhost.";dbname=".DBname,DBuser,DBPass);
		
	} catch(PDOException $e){
		
		die($e->getMessage());
	}

	//$DBcon1 =mysqli_connect(DBhost,DBuser,DBPass,DBname);