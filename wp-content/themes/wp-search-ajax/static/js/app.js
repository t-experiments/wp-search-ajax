jQuery(function($){
    /* listar posts */

    var string = '';
    var listarPostsAjax = function(string){
        $.ajax({
            url: wp.ajaxurl,
            type: 'GET',
            data: {
                action: 'listar_posts',
                string: string
            },
            beforeSend: function(){
                $('#loading').removeClass('d-none');
            }
        })
        .done(function(resposta){
            $('#loading').addClass('d-none');
            $('#resultado-search').html(resposta);
        });
    }

    listarPostsAjax(string);

    // Ação do botão pesquisar
    $('#btn-buscar').on('click', function(){
        var string = $('#input-buscar').val();
        listarPostsAjax(string);
    });
});