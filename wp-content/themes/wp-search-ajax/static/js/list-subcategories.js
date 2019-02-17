jQuery(function($){
    var listSubcategories = function (idCategory) {
        $.ajax({
            url: './wp-admin/admin-ajax.php',
            type: 'GET',
            data: {
              action: 'list_subcategories',
              idCategory: idCategory
            },
            beforeSend: function () {
                $('#subcategories').html('<option value="">Pesquisando...</option>');
            }
        })
        .done(function (response) {
            var subcategories = response;
            
            $('#subcategories').html('');
            $('#subcategories').html('<option value="">Selecionar Time</option>');
        
            $.each(subcategories, function (i, e) {
                $('#subcategories').append(
                    `<option data-slug="${e.slug}" value="${e.term_taxonomy_id}">${e.name}</option>`
                );
            });
        });        
    }    

    $('#categories').on('change', function(){
        var idCategory = $(this).val();
        
        if(idCategory !== '') {
            listSubcategories(idCategory);
        }
    });

});