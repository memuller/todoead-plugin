<?php  
	namespace Quonde\Presenters ;
	use Presenter ; 

	class Registration extends Presenter {

		static $uses = array('styles', 'scripts', 'admin_scripts');

		static function scripts(){
			if(is_page('registration')){
					#wp_enqueue_script( 'jquery-cep', static::url('js/jquery-cep/jquery.cep-1.0.min.js'), array('jquery') );	
			}
		}

		static function index(){
			
			return static::render('registration/index');	
						
		}



	}
?>