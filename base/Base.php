<?php
	namespace TodoEAD ;  
	use BasePlugin ;

	class Plugin extends BasePlugin {

		static $db_version = 0.3 ;
		static $custom_posts = array('Course', 'Lesson');
		static $custom_users = array('Teacher');
		static $custom_classes = array();
		static $custom_singles = array();
		static $custom_taxonomies = array();
		static $restricted_menus = array();

		static $roles = array(
		);

		static $absent_roles = array('author', 'collaborator');

		

	}

 ?>