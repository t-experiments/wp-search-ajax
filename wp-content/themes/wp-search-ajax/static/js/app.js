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

   
    // Ação do select campeonato (categoria)
    $('.select-categoria').change('on', function(){
        var idTime = $(this).val();

        $('.select-sub-categoria').html('<option value="">buscando times</option>');
        selecionarTimeAjax();
    });


    // Função Ajax Selecionar Campeonato 
    var selecionarTimeAjax = function (id_campeonato) {
        $.ajax({
            url: wp.ajaxurl,
            type: 'GET',
            data: {
                action: 'selecionar_campeonato',
            },
            beforeSend: function () {
                console.log('Selecionando Times');
            }
        })
        .done(function (resposta) {
             console.log(resposta);   
        });
    }

    // Ação do select time (sub categoria)
    $('.select-sub-categoria').change('on', function(){
        console.log('select-sub-categoria');
        // selecionarTimeAjax();
    });    
});