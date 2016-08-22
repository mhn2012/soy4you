<?php

  /* Variabler der sætter vores konfiguration af databasen op  */

	$db_host = "mysql.thewwwintegrator.dk";
	$db_name = "thewwwintegrator_dk_db";
	$db_user = "thewwwinteg_dk";
	$db_pass = "mhn2012";
	
	/*(vores web config/connection string)*/
	try{
		
		$db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
		$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	/*Try and catch metode til at teste vores connection*/
	catch(PDOException $e){
		echo $e->getMessage();
	}


?>