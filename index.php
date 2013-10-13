<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Killerphp.com - OOP in PHP</title>
		
		<?php include("class_lib.php"); ?>
		
	</head>
	
	<body>
		
		<?php
		
			$stefan = new person();
			$nick = new person();
			
			$stefan->set_name("Stefan Mischook");
			$nick->set_name("Nick Waddles");
			
			echo "Stefan's full name: " . $stefan->get_name();
			echo "Nick's full name: " . $nick->get_name();
				
		
		?>
		
		
	</body>
	
</html>
