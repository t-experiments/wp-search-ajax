<?php
    function app_scripts() {
	    // assets folder
	    $css_folder =  get_template_directory_uri() . '/static/css';
	    $js_folder	=  get_template_directory_uri() . '/static/js';
        
        // versão
	    $versao 	= rand(0,999);
        
        // jQuery
        wp_enqueue_script('jquery');
        
          
        // tema
	    wp_enqueue_style( 'theme', $css_folder . '/style.css', 1, $versao, 'all' );
	    wp_enqueue_script( 'buscar-posts', $js_folder . '/buscar-posts.js', null, $versao, true );
	    wp_enqueue_script( 'list-subcategories', $js_folder . '/list-subcategories.js', null, $versao, true );
	    wp_enqueue_script( 'list-content-subcat', $js_folder . '/list-content-subcat.js', null, $versao, true );
    }
    
    add_action("wp_enqueue_scripts", "app_scripts");  