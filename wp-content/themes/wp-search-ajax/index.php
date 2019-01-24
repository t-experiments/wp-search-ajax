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
        
        <div class="box">
            <h2>Select</h2>
            <div>
                <select class="select-categoria">
                    <option value="categoria-1">Categoria 1</option>
                    <option value="categoria-2">Categoria 2</option>
                    <option value="categoria-3">Categoria 3</option>
                    <option value="categoria-4">Categoria 4</option>
                </select>

                <select class="select-sub-categoria">
                    <option value="sub-categoria-1">Sub-Categoria 1</option>
                    <option value="sub-categoria-2">Sub-Categoria 2</option>
                    <option value="sub-categoria-3">Sub-Categoria 3</option>
                    <option value="sub-categoria-4">Sub-Categoria 4</option>
                </select>                
            </div>

        </div>
        <?php wp_footer(); ?>
    </body>
</html>    