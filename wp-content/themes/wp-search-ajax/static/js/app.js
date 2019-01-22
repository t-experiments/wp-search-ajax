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
                $('#loading').removeClass('d-none');
            }
        })
        .done(function(resposta){
            $('#loading').addClass('d-none');
            $('#resultado-search').html(resposta)
        });
    }

    // listarPostsAjax();

    // Ação do botão pesquisar
    $('#btn-buscar').on('click', function(){
        listarPostsAjax();
    });
});