<?php 
/*
	Plugin Name: test-widget
	Plugin URI: http://localhost/exo-wp/wordpress
	Description: widget citation aléatoire
	Version: 0.1
	Author: Moi
	Author URI: http://localhost/exo-wp/wordpress
	License: GPL2
	*/
	// class Test_Citation_Widget extends WP_Widget{
	// 	public function __construct(){
	// 		parent::__construct('testWidget', 'citation',array('descriptrion' =>'des citation aléatoire'));
	// 	}

	// 	public function widget($args, $instance){
	// 		echo 'widget citation';
	// 	}
		
	// }

add_action('widgets_init', 'citation_init');

function citation_init(){
	register_widget('Test_Citation_Widget');
}


class Test_Citation_Widget extends WP_widget{
	
	function Test_Citation_Widget (){
		$option = array(
			"className" =>"citation",
			"description" =>"citation",
			);

		$this->WP_widget("widget-citation", "widget citation", $option);
	}

	function widget($args, $instance){
		extract($args);
		echo $before_widget;
		echo $before_title. "citation :".$after_title;

		$citation=[
		"Quand on parle du loup, on en voit la queue.",
		"Chien qui aboie ne mord pas.",
		 "Petit à petit, l'oiseau fait son nid.",
		 "Mieux vaut vivre un jour comme un lion que cent ans comme un mouton.",
		 "On apprend peu par la victoire, mais beaucoup par la défaite.",
		 "On commence à vieillir quand on finit d'apprendre.",
		];
		echo $citation[array_rand($citation)];
		echo $after_widget; 
	}
}

 ?>