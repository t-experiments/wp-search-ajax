<?php 
    function listar_categorias() {
        $args = [
            'orderby' => 'name',
            'order' => 'ASC'
        ];
    }
    
    function listar_posts() {

        $string = $_GET['string'];

        $args = [ 
            'post_type' => 'post', 
            'posts_per_page' => 3, 
            's' => $string 
        ];

        // armazena a query
        $posts = new WP_Query($args);

        if($posts->have_posts() && $string !== '') {
            $itens = [];

            while($posts->have_posts()){
                $posts->the_post();

                $item = [
                    'titulo' => get_the_title(),
                    'resumo' => get_the_excerpt()
                ];

                array_push($itens, $item);
            }

            $resposta = [ 'msg' => 'Posts encontrados.', 'posts' => $itens ];
            wp_send_json_success($resposta);
        
        } else {
        
            $resposta = [ 'msg' => 'Nenhum post encontrado.' ];
            wp_send_json_error($resposta);
        
        }

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
	    wp_enqueue_style( 'theme', $css_folder . '/style.css', 1, $versao, 'all' );
	    wp_enqueue_script( 'app', $js_folder . '/app.js', null, $versao, true );
        
        $wpVars = [ 'ajaxurl' => admin_url( 'admin-ajax.php' ) ];
	    wp_localize_script( 'app', 'wp', $wpVars );
	
    }
    
    add_action("wp_enqueue_scripts", "app_scripts");    