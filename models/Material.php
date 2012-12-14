<?php
	namespace TodoEAD ;  
	use CustomPost, DateTime ;

	class Material extends CustomPost {

		static $name = "material" ;
		static $editable_by = array(
			'form_advanced' => array('fields' => array( 'file' )),
			'course' => array('name' => ' ', 'fields' => array('course'))
		);
		static $creation_fields = array( 
			'label' => 'material','description' => '',
			'public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post',
			'hierarchical' => false,'rewrite' => array('slug' => ''),'query_var' => true,
			'supports' => array('custom-fields', 'title', 'thumbnail', 'editor'), 'publicly_queryable' => true,
			'has_archive' => true, 'taxonomies' => array(),
			'labels' => array (
				'name' => 'Materiais',
				'singular_name' => 'Material'
			)
		) ;

		static $fields = array(
			'file' => array('type' => 'file', 'label' => 'Arquivo', 'description' => 'Arquivo para download.'),
			'course' => array('type' => 'post_type', 'post_type' => 'course', 'required' => true, 
				'label' => 'Curso' )
		) ;

		static $collumns = array( 
			'col_course' => 'Curso'
		);
		static $absent_collumns = array('date');
		
		static function col_course(){
			$material = new \TodoEAD\Material() ;
			$course = new \TodoEAD\Course($material->course);
			echo $course->post_title ;
		}
	}

 ?>