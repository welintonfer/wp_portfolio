<?php
// #####################################################################################################################
//** 01 ** //Cria a função que cria estilos scripts
function ton_scripts() {
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', false ); //o valor "True coloca o script no top"

    //Cria a folha de estilo realtiva a todos os tipos de media
    	wp_enqueue_style( 'fancy-lab-style', get_stylesheet_uri(), array(), '1.0', 'all'  ); //Use esta linha somente para versões finalizadas e em  live.

    //A função abaixo é para desenvolvimento
    // wp_enqueue_style( 'fancy-lab-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all' );


    // Enfileirando as fontes Google
    wp_enqueue_style( 'fancy-lab-google-fonts', 'https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap', array(), null );
}

//Chama o hook('wp_enqueue_scripts') e o callbak('fancy_lab_scripts') seja executado nele
add_action( 'wp_enqueue_scripts', 'ton_scripts' );
// #####################################################################################################################



