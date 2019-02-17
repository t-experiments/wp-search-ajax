<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <?php wp_head(); ?>
    </head>

    <body>
        <div class="box">
            <h2>Search</h2>
            <div>
                <input id="input-buscar" type="text" placeholder="pesquisar">
                <button id="btn-buscar">buscar</button>
            </div>

            <img id="loading" class="d-none" src="<?php bloginfo( 'template_url' );?>/static/images/loading.gif" alt="">

            <div id="resultado-search"></div>   
        </div>
    
        <?php wp_footer(); ?>
    </body>
</html>    