<?php
	namespace TodoEAD ;  
	use CustomPost, DateTime ;

	class Sponsor extends CustomPost {

		static $name = "sponsor" ;
		static $editable_by = array(
			'form_advanced' => array('fields' => array('url'))
		);
		static $creation_fields = array( 
			'label' => 'sponsor','description' => '',
			'public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post',
			'hierarchical' => false,'rewrite' => array('slug' => ''),'query_var' => true,
			'supports' => array('custom-fields', 'title', 'thumbnail'), 'publicly_queryable' => true,
			'has_archive' => true, 'taxonomies' => array(),
			'labels' => array (
				'name' => 'Patrocinadores',
				'singular_name' => 'Patrocinadores'
			)
		) ;

		static $fields = array(
			'url' => array('type' => 'url', 'size' => 60, 'label' => 'URL',
				'description' => 'Endereço a ser acessado quando o banner for clicado.')
		) ;

		static $collumns = array( );
		static $absent_collumns = array('date');
		
	}

 ?>