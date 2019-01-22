<?php 
    function listar_posts() {

        $args = [ 'post_type' => 'post', 'posts_per_page' => 3, 's' => 'corinthians' ];

        $posts = new WP_Query($args);

        ?>
        
        <?php if( $posts->have_posts() ):?>    
            <?php while( $posts->have_posts() ): $posts->the_post();?>
                <?php the_title('<h2>', '</h2>');?>
                <?php the_excerpt();?>
            <?php endwhile;?>
        <?php else:?>
            <p>Nenhum conteúdo encontrado</p>
        <?php endif;?>

<?php        
        exit;
    }

    add_action('wp_ajax_listar_posts', 'listar_posts');
    add_action('wp_ajax_nopriv_listar_posts', 'listar_posts');


    function app_scripts() {
	    // assets folder
	    $css_folder =  get_template_directory_uri() . '/static/css';
	    $js_folder	=  get_template_directory_uri() . '/static/js';
        
        // versão
	    $versao 	= rand(0,999);
        
        // jQuery
        wp_enqueue_script('jquery');
        
          
        // tema
	    wp_enqueue_style( 'theme', $css_folder . '/style.css', 1, 1, 'all' );
	    wp_enqueue_script( 'app', $js_folder . '/app.js', null, $versao, true );
        
        $wpVars = [ 'ajaxurl' => admin_url( 'admin-ajax.php' ) ];
	    wp_localize_script( 'app', 'wp', $wpVars );
	
    }
    
    add_action("wp_enqueue_scripts", "app_scripts");    