<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Killerphp.com - OOP in PHP</title>
		
		<?php include("class_lib.php"); ?>
		
	</head>
	
	<body>
		
		<?php
			// 11. Accessing an Object's Data 
			// instatiate a class - create an instance of it
			// to create an object out of a class you use the 'new' keyword
			/*
			
			$stefan = new person();
			$nick = new person();
			
			// set properties using methods (setters) we created
			$stefan->set_name("Stefan Mischook");
			$nick->set_name("Nick Waddles");
			
			// use getter methods to access data held in our objects using (->)
			echo "Stefan's full name: " . $stefan->get_name();
			echo "Nick's full name: " . $nick->get_name();
				
			*/
			
			// 14. Constructors
			
				$stefan = new person("Stefan Mischook");
				
				echo "Stefan's full name: " . $stefan->get_name();
				
				/*
				Since $pin_number was declared private, this line of code will generate an
				error.
				
				
				echo "Tell me private stuff: " . $stefan->$pin_number;
				*/
		?>
		
		
	</body>
	
</html>
