<?php 
	// create the class of 'person'
	// variable inside a class are called properties
	// functions inside a class are called methods
	// A class's method is used to manipulate its own data/properties
	// getter and setter names should match the property: get_name / set_name
	
	// this is a built in variable
	/*	class person {
			var $name;
		
		function set_name($new_name) {
			$this->name = $new_name;
		}
		
		function get_name() {
			return $this->name;
		}
	}	
	*/
	
	// Constructors - initialize your object's properties (give your properties values)
	class person {
		var $name;
		
		function __construct($persons_name) {
			$this->name = $persons_name;
		}
	
		function set_name($new_name) {
			$this->name = $new_name;
		}
		
		function get_name() {
			return $this->name;
		}
	}
	
	// Functions = Methods
	// Variables = Properties
	
	

?>