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
            $('#resultado-search').html('');
            
            var success = resposta.success;
            var posts = resposta.data.posts;

            if(success) {
                $.each(posts, function(i, post){
                    $('#resultado-search').append(
                        `<h2>${post.titulo}</h2>
                        <p>${post.resumo}</p>
                        `
                    );
                });
            } else {
                $('#resultado-search').html(
                    `<p class="msg-erro">
                        ${resposta.data.msg}
                    </p>
                    `
                );                
            }

        });
    }

    //listarPostsAjax(string);

    // Ação do botão pesquisar
    $('#btn-buscar').on('click', function(){
        var string = $('#input-buscar').val();
        listarPostsAjax(string);
    });
});