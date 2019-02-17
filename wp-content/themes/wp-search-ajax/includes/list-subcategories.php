<?php
    function list_subcategories() {
        $args = array(
            'orderby'   => 'name', 
            'order'     => 'ASC', 
            'parent'    => $_GET['idCategory']
        );

        $subcategories = get_terms( 'category', $args);
        wp_send_json($subcategories);
    }

    add_action('wp_ajax_list_subcategories', 'list_subcategories');
    add_action('wp_ajax_nopriv_list_subcategories', 'list_subcategories');       