<?php 
	//----------------------------------------------------------------------------------//	
	//                               COMPULSORY SETTINGS
	//----------------------------------------------------------------------------------//
	
	/*  Set the URL to your Sendy installation (without the trailing slash) */
	define('APP_PATH', 'http://tranquil-castle-25130.herokuapp.com/');
	
	/*  MySQL database connection credentials (please place values between the apostrophes) */
	$dbHost = "http://us-cdbr-iron-east-04.cleardb.net/"; //MySQL Hostname
	$dbUser = "b593d7c2f3ba91"; //MySQL Username
	$dbPass = "a0260ecd"; //MySQL Password
	$dbName = "heroku_110cb812c93efbb"; //MySQL Database Name
	
	
	//----------------------------------------------------------------------------------//	
	//								  OPTIONAL SETTINGS
	//----------------------------------------------------------------------------------//	
	
	/* 
		Change the database character set to something that supports the language you'll
		be using. Example, set this to utf16 if you use Chinese or Vietnamese characters
	*/
	$charset = 'utf8mb4';
	
	/*  Set this if you use a non standard MySQL port.  */
	$dbPort = 3306;	
	
	/*  Domain of cookie (99.99% chance you don't need to edit this at all)  */
	define('COOKIE_DOMAIN', '');
	
	//----------------------------------------------------------------------------------//
?>
