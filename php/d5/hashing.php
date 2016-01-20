<!DOCTYPE html>
<html>
<head>
	<title>Hashing in PHP</title>
</head>
<body>
	
	<?php 
		/*
			Authentication, Encryption,

			Hashing?
				To Check Message Integrity
					One-Way Function > return a fixed number of bits for any text/message/file
	
					Larger the number of bits > more secure the hashing algo
				
				Mostly cracked using Brute-Force Attacks
					123 , admin, 12345, !@#$%, dictionary

				Message Digest > MD5
						Broked by a parallel computing
				SHA-1 
						Secure Hashing Alogrithum
		*/
		
			$message = 'This is some secret message';
			echo md5($message);
			echo '<br/>';
			
			echo sha1($message);
			echo '<br/>';

			echo md5(sha1($message));

			echo '<br/>';
			echo  crypt( $message, 'secret' );
	?>

</body>
</html>