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
		
		// Access modifiers: public, private, protected (public is default)
		// Note: when you declare a property with the 'var' keyword, it is considered public
		
		public $height;
		protected $social_insurance;
		private $pin_number;
		
		function __construct($persons_name) {
			$this->name = $persons_name;
		}
	
		function set_name($new_name) {
			$this->name = $new_name;
		}
		
		function get_name() {
			return $this->name;
		}
		
		private function get_pin_number() {
			return $this-$pin_number;
		}
	}
	
	// Functions = Methods
	// Variables = Properties
	
	

?>