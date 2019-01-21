jQuery(function($){
    /* listar posts */
    var listarPostsAjax = function(){
        $.ajax({
            url: wp.ajaxurl,
            type: 'GET',
            data: {
                'action': 'listar_posts'
            },
            beforeSend: function(){
                console.log('carregando posts...');
            }
        })
        .done(function(resposta){
            console.log(resposta);
        });
    }

    listarPostsAjax();
});