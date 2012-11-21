<?php
	namespace TodoEAD;
	use CustomUser ;

	class Teacher extends CustomUser  {

		static $name = 'teacher' ;
		static $label = 'Professor';
		static $inherits_from = 'editor';
		static $capabilities = array();

		static $fields = array(
			'description' => array()
		);
		
	}

 ?>