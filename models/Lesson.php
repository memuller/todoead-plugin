<?php
	namespace TodoEAD ;  
	use CustomPost, DateTime ;

	class Lesson extends CustomPost {

		static $name = "lesson" ;
		static $creation_fields = array( 
			'label' => 'lesson','description' => '',
			'public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post',
			'hierarchical' => false,'rewrite' => array('slug' => 'aula'),'query_var' => true,
			'supports' => array('custom-fields', 'title', 'thumbnail', 'editor'), 'publicly_queryable' => true,
			'has_archive' => true, 'taxonomies' => array(),
			'labels' => array (
				'name' => 'Aulas',
				'singular_name' => 'Aula'
			)
		) ;

		static $fields = array(
			'course' => array('type' => 'post_type', 'post_type' => 'course', 'required' => true, 
				'label' => 'Curso' ),
			'start_date' => array('type' => 'date', 'label' => 'Data', 'required' => true),
			'start_time' => array('type' => 'time', 'label' => 'Hora', 'required' => true),
			'duration' => array('type' => 'integer', 'required' => true, 
				'label' => 'Duração', 'description' => 'em horas'),
			'room_url' => array('type' => 'url', 'size' => 60, 'label' => 'URL de conferência',
				'description' => 'inserir uma URL de conferência notificará os estudantes sobre a abertura desta.')
		) ;

		static $editable_by = array(
			'course' => array('name' => ' ', 'fields' => array('course')),
			'time' => array('name' => 'Horário', 'fields' => array('start_date', 'start_time', 'duration')),
			'form_advanced' => array('name' => 'Sala', 'fields' => array('room_url')) 
		);

		public function end_time(){
			return $this->start_time + $this->duration ;
		}

		static $collumns = array(
			'col_course' => 'Curso',
			'col_time' => 'Horário'
		);

		static function col_course(){
			$lesson = new \TodoEAD\Lesson() ;
			$course = new \TodoEAD\Course($lesson->course);
			echo $course->post_title ;
		}

		static function col_time(){
			$lesson = new \TodoEAD\Lesson();
			printf("%s das %s às %s", $lesson->start_date, $lesson->start_time, $lesson->end_time());
		}

		static $absent_collumns = array();
		
	}

 ?>