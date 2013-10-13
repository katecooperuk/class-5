<?php

	// 'extends' is the keyword that enables inheritance
	
	/*
	class employee extends person {
		
		function __construct($employee_name){
			
			$this->set_name($employee_name);
		}
		
	}
	*/
	
	// explicitly adding class properties are optional - but good practice
	
	class person {
	
		var $name;
		
			function __construct($persons_name) {
				$this->name = $persons_name;
			}
			
			function get_name() {
				return $this->name;
			}
			
			// protected methods and properties restrict access to those elements
			
			protected function set_name($new_name) {
				if (name != "Jimmy Two Guns") {
					$this->name = strtoupper($new_name);
				}
			}
			
	}
	
	// extends is the keyword that enables inheritance
	
	class employee extends person {
		
		protected function set_name($new_name) {
			if ($new_name == "Stefan Lamp") {
				$this->name = $new_name;
			}
			else if ($new_name == "Johnny Fingers") {
				// using:: allows you to specifically name the class where you want PHP to 					// search for a method - 'person::set_name()' tells PHP to search for 
				// set_name() in the 'person' class.
				
				// There is also a shortcut if you just want refer to current class's parent: 				// by using the 'parent' keyword.
				parent::set_name($new_name);
				
			}
		}
		
		function __construct($employee_name) {
			$this->set_name($employee_name);
		}
	}
	
	// notice how set_name() is different in the 'employee' class from the version found in the parent class: 'person'
	
?>
	
	