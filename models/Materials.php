<?php
	namespace TodoEAD ;  
	use CustomPost, DateTime ;

	class Course extends CustomPost {

		static $name = "course" ;
		static $editable_by = array(
			'registration' => array('name' => 'Período de Inscrições', 'fields' => array('registration_start_date', 'registration_end_date', 'registration_enabled', 'registration_limit')),
			'info' => array('name' => 'Período Letivo', 'fields' => array('start_date', 'end_date', 'numberof_classes'))
		);
		static $creation_fields = array( 
			'label' => 'course','description' => '',
			'public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post',
			'hierarchical' => false,'rewrite' => array('slug' => ''),'query_var' => true,
			'supports' => array('custom-fields', 'title', 'thumbnail', 'editor'), 'publicly_queryable' => true,
			'has_archive' => true, 'taxonomies' => array(),
			'labels' => array (
				'name' => 'Cursos',
				'singular_name' => 'Curso'
			)
		) ;

		static $fields = array(
			'registration_enabled' => array('type' => 'boolean', 'label' => 'Habilitadas?', 'required' => true),
			'registration_limit' => array('type' => 'integer', 'label' => 'Lotação', 'required' => true),
			'registration_start_date' => array('type' => 'date', 'label' => 'Início', 'required' => true),
			'registration_end_date' => array('type' => 'date', 'label' => 'Término', 'required' => true),

			'start_date' => array('type' => 'date', 'label' => 'Início', 'required' => true),
			'end_date' => array('type' => 'date', 'label' => 'Término', 'required' => true),
			'numberof_classes' => array('type' => 'integer', 'label' => 'Nº de aulas', 'required' => true)
		) ;

		static $collumns = array( 
			'col_registrations' => 'Inscrições',
			'col_period' => 'Período',
			'col_classes' => 'Aulas'
		);
		static $absent_collumns = array('date');

		static function col_registrations(){
			$course = new \TodoEAD\Course() ;
			printf("%s/%s", 0, $course->registration_limit);
		}

		static function col_period(){
			$course = new \TodoEAD\Course() ;
			printf("%s - %s  <br/> <i>(inscrições de %s - %s)</i>", $course->start_date, $course->end_date, $course->registration_start_date, $course->registration_end_date );
		}

		static function col_classes(){
			$course = new \TodoEAD\Course();
			$returnable = "$course->numberof_classes ";
			$lessons = $course->lessons();
			if(!empty($lessons)){
				$lessons_text = array(); $i = 1 ;
				foreach ($lessons as $lesson) {
					$lessons_text[] = sprintf("<a href='%s'>%s</a>", 
						admin_url("post.php?post=$lesson->ID&action=edit"), $lesson->post_title);
					$i += 1;
				}
				$returnable .= " <i>(".implode(', ', $lessons_text) .")</i>" ;
			}
			echo $returnable ;
		}

		public function students(){

		}

		public function lessons($args = array()){
			$results = array(); 
			$base_args = array('post_type' => 'lesson', 'meta_key' => 'course', 'meta_value' => $this->ID) ;
			foreach(get_posts(array_merge($args, $base_args)) as $post){
				$results[]= new \TodoEAD\Lesson($post->ID);
			}
			return $results ;
		}

		public function has_spaces(){
			return true ;
		}

		public function in_time_for_signups(){
			return true ;
		}

		public function accepts_signups(){
				
		}
		
	}

 ?>