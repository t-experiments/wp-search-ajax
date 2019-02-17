jQuery(function($){
    var search = '';

    var buscarPosts = function(search){
        $.ajax({
            url: './wp-admin/admin-ajax.php',
            type: 'GET',
            data: {
                action: 'buscar_posts',
                search: search
            },
            beforeSend: function(){
                $('#loading').removeClass('d-none');
            }
        })
        .done(function(response){
            var success = response.success;
            var posts = response.data.posts;
            
            $('#loading').addClass('d-none');
            $('#resultado-search').html('');

            if(success) {
                $.each(posts, function(i, e){
                    $('#resultado-search').append(
                        `<h2>${e.title}</h2>
                        <p>${e.resume}</p>
                        `
                    );
                });
            } else {
                $('#resultado-search').html(
                    `<p class="msg-erro">
                        ${response.data.msg}
                    </p>
                    `
                );                
            }

        });
    }

    // Ação do botão pesquisar
    $('#btn-buscar').on('click', function(){
        search = $('#input-buscar').val();
        buscarPosts(search);
    }); 
});