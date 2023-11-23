<?php 

// Função para registrar os Scripts

function magofilms_scripts() {
		// Desregistra o jQuery do Wordpress
		wp_deregister_script('jquery');

		// Registra o jQuery Novo
	
		wp_register_script('script', get_template_directory_uri() . '/js/script.js', [], false, true);

        // Carrega o Script
	    wp_enqueue_script( 'script' );


}

add_action( 'wp_enqueue_scripts', 'magofilms_scripts' );

// Função para registrar o TailwindCSS

function magofilms_css() {
	wp_enqueue_style('tailwindcss-style', get_theme_file_uri('/css/index.css'));
}

add_action( 'wp_enqueue_scripts', 'magofilms_css' );


?>