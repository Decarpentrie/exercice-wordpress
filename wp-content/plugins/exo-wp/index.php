<?php 
	/*
	Plugin Name: exo-wp
	Plugin URI: http://localhost/exo-wp/wordpress
	Description: citation aléatoire
	Version: 0.1
	Author: Moi
	Author URI: http://localhost/exo-wp/wordpress
	License: GPL2
	*/
	function citation(){
		$citation=[
		"Quand on parle du loup, on en voit la queue.",
		"Chien qui aboie ne mord pas.",
		 "Petit à petit, l'oiseau fait son nid.",
		 "Mieux vaut vivre un jour comme un lion que cent ans comme un mouton.",
		 "On apprend peu par la victoire, mais beaucoup par la défaite.",
		 "On commence à vieillir quand on finit d'apprendre.",
		];
		return $citation[array_rand($citation)];

	}
	
	add_shortcode('bonjour', 'citation');
		

 ?>