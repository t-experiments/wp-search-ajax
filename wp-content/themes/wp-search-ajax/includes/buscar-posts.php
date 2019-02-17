<?php
    function buscar_posts() {
        $search = $_GET['search'];

        $args = [ 
            'post_type'         => 'post', 
            'post_status'       => 'publish',
            'posts_per_page'    => 3, 
            's'                 => $search 
        ];

        // armazena a query
        $posts = new WP_Query($args);

        if( $posts->have_posts() ) {
            $itens = [];

            while($posts->have_posts()){
                $posts->the_post();
                $item = [ 'title' => get_the_title(), 'resume' => get_the_excerpt() ];
                array_push($itens, $item);
            } // end while

            $response = [ 'msg' => 'Posts encontrados.', 'posts' => $itens ];
            wp_send_json_success($response);

        } else {
            $response = [ 'msg' => 'Nenhum post encontrado.' ];
            wp_send_json_error($response);
        } // end if
        
    } // end function
    
    add_action('wp_ajax_buscar_posts', 'buscar_posts');
    add_action('wp_ajax_nopriv_buscar_posts', 'buscar_posts');    