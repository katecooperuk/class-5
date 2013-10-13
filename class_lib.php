<?php

	// 'extends' is the keyword that enables inheritance
	
	class employee extends person {
		
		function __construct($employee_name){
			
			$this->set_name($employee_name);
		}
		
	}
	
	