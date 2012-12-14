<?php
	namespace TodoEAD ;  
	use CustomPost, DateTime ;

	class News extends CustomPost {

		static $name = "news" ;
		static $editable_by = array(
			'form_advanced' => array('fields' => array('url'))
		);
		static $creation_fields = array( 
			'label' => 'news','description' => '',
			'public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post',
			'hierarchical' => false,'rewrite' => array('slug' => ''),'query_var' => true,
			'supports' => array('custom-fields', 'title', 'thumbnail', 'editor'), 'publicly_queryable' => true,
			'has_archive' => true, 'taxonomies' => array(),
			'labels' => array (
				'name' => 'Novidades',
				'singular_name' => 'Novidade'
			)
		) ;

		static $fields = array(
			'course' => array('type' => 'post_type', 'post_type' => 'course', 'required' => true, 'label' => 'Curso'),
			'url' => array('type' => 'url', 'size' => 60, 'label' => 'URL',
				'description' => 'caso uma URL seja inserida, ela será utilizada como o corpo da notícia.')
		) ;

		static $collumns = array( );
		static $absent_collumns = array('date');
		
	}

 ?>