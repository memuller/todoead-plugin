<?php
	namespace Quonde ;  
	use CustomTaxonomy, DateTime, DateInterval ;

	class Districts extends CustomTaxonomy {

		static $name = "districts" ;
		static $applies_to = 'store';
		static $settings = array( 'hierarchical' => true,'show_ui' => true,'query_var' => true,'rewrite' => array('slug' => 'quadra'));
		static $labels = array(
			'name' => 'Quadras',
			'singular_name' => 'Quadra',
			'search_items' => 'Buscar Áreas',
			'popular_items' => 'Áreas mais frequentes',
			'all_items' => 'Todas as Áreas',
			'parent_item' => 'Área-pai',
			'parent_item_colon' => 'Área-pai',
			'edit_item' => 'Editar Área',
			'update_item' => 'Salvar Área',
			'add_new_item' => 'Adicionar nova Área',
			'new_item_name' => 'Nome da nova Área'
		);

		static $fields = array(
			'zone' => array('type' => 'term_taxonomy', 'taxonomy' => 'zones', 'label' => 'Área', 'description' => 'Área da quadra.'),
			'location' => array('type' => 'geo', 'label' => 'Localização', 'width' => '500px', 'height' => '300px',
				'default' => array('lat' => '-15.7801482', 'lng' => '-47.92916980000001'), 'description' => 'Ponto central da quadra.
				<p> Digite um endereço e pressione Enter para encontrá-lo no mapa; <br/> ou encontre o local no mapa e insira o endereço manualmente. </p> 
				<p>Se deixar o endereço em branco, ele será preenchido automaticamente.</p>' 
			)
		) ;

		static function build(){
			$class = get_called_class();
			parent::build();
		}
	}

 ?>