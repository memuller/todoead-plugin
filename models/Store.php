<?php
	namespace Quonde ;  
	use CustomPost, DateTime, DateInterval ;

	class Store extends CustomPost {

		static $name = "store" ;
		static $editable_by = array('form_advanced');
		static $creation_fields = array( 
			'label' => 'store','description' => 'Loja',
			'public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post', 'map_meta_cap' => true, 
			'hierarchical' => false,'rewrite' => array('slug' => ''),'query_var' => true,
			'supports' => array('custom-fields', 'editor', 'thumbnail'), 'publicly_queryable' => true,
			'has_archive' => true, 'taxonomies' => array(),
			'labels' => array (
				'name' => 'Lojas',
				'singular_name' => 'Loja',
				'menu_name' => 'Lojas',
				'add_new' => 'Nova loja',
				'add_new_item' => 'Cadastrar nova loja',
				'edit' => 'Alterar',
				'edit_item' => 'Alterar loja',
				'new_item' => 'Cadastrar loja',
				'view' => 'Consultar',
				'view_item' => 'Consultar loja',
				'search_items' => 'Buscar lojas',
				'not_found' => 'Nenhuma loja cadastrado.',
				'not_found_in_trash' => 'Nenhuma loja foi encontrado na lixeira.'
			)
		) ;

		static $fields = array(
			'location' => array('type' => 'geo', 'label' => 'Localização', 'description' => 'Localização da loja.', 'required' => true, 'width' => '500px', 'height' => '300px' ),
			'owner_id' => array('type' => 'integer', 'hidden' => true),
			
		) ;

		static $collumns = array( 
			'status' => 'Estado',
			'lottery_date' => 'Data do sorteio',
			'num_registrations_overview' => 'Registros (online/físicos)'

		);

		static $actions = array(
			'download_cvs' => array('label' => 'Relatório', 'condition' => 'closed', 'capability' => 'edit_tickets' ),
			'casanova-period-statistics' => array('label' => 'Estatísticas', 'url' => '/', 'capability' => 'edit_statistics')
		);
		static $absent_collumns = array('date');
		static $absent_actions = array('quick-edit', 'view');

		static function build(){
			parent::build(); 
			$class = get_called_class();
		}
	}

 ?>