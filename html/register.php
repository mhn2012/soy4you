<?php
	
	/* Med denne require henter vi vores dbconfig.php fil*/
	require_once 'dbconfig.php';

	/* Med denne if sætning sætter vi vores lokale variabler op ($user_name) osv op, og definere en superglobal*/
	if($_POST)
	{
		$user_name = $_POST['user_name'];
		$user_email = $_POST['user_email'];
		$joining_date = date('Y-m-d H:i:s');
		
		
			/* Her prøver vi via vores try metode at vælge data fra vores tabel (tbl_users) hvor den skal udvælge data efter parameteren (user_email)*/
		try
		{	
		
			$stmt = $db_con->prepare("SELECT * FROM tbl_users WHERE user_email=:email");
			$stmt->execute(array(":email"=>$user_email));
			$count = $stmt->rowCount();
			
			/* Her fortæller vi metoden, at hvis der er 0 emails registeret med det indtastede value, så skal den indsætte de indtastede data ind i tabellen med værdierne :uname, :email osv*/
			if($count==0){
				
			$stmt = $db_con->prepare("INSERT INTO tbl_users(user_name,user_email,joining_date) VALUES(:uname, :email, :jdate)");
			$stmt->bindParam(":uname",$user_name);
			$stmt->bindParam(":email",$user_email);
			$stmt->bindParam(":jdate",$joining_date);
			
			/* Hvis dataen bliver submitted korret skal funktionen echoe ud "Sucess"*/

				if($stmt->execute())
				{
					echo "Success";
				}
							/* Hvis dette mislykkedes så skal den exhoe ud den kommende tekst "Kunne ikke udføres"*/
				else
				{
					echo "Kunne ikke udføres";
				}
			
			}
			/* Denne else parametre kigger på om der i forvejen eksistere en registeret email med de indtastede dataer*/
			else{
				
				echo "Email adressen er taget i forvejen"; //  not available
			}
				
		}
		
		/* Catch metode til at ekskvere en exception, hvis der går noget galt i koden*/
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>