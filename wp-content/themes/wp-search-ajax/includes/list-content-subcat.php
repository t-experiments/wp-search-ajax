<?php
    function list_content_subcat() {
        $argsTax = array( 
            'taxonomy' => 'category', 
            'field' => 'slug', 
            'terms' => $_GET['slugSubCat']  
        );
        
        $args = array(
            'post_type'     => 'post',
            'post_status'   => 'publish',
            'term'          => $_GET['slugCategory'],
            'orderby'       => 'ASC', 
            'tax_query'     => array( $argsTax ) 
        );

        $contentSubCat = new WP_Query( $args );

        if ($contentSubCat->have_posts()) {
            $itens = [];

            while($contentSubCat->have_posts()){
                $contentSubCat->the_post();
                
                $item = ['title' => get_the_title(), 'content' => get_the_content()];
                array_push($itens, $item);
            }

            $response = ['posts' => $itens];
        }      

        wp_send_json($response);
    }

    add_action('wp_ajax_list_content_subcat', 'list_content_subcat');
    add_action('wp_ajax_nopriv_list_content_subcat', 'list_content_subcat');  