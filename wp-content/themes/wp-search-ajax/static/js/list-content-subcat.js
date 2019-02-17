jQuery(function($){
    var listContentSubcat = function (slugCategory, slugSubCat) {
        $.ajax({
            url: './wp-admin/admin-ajax.php',
            type: 'GET',
            data: {
              action: 'list_content_subcat',
              slugCategory: slugCategory,
              slugSubCat: slugSubCat
            },
            beforeSend: function () {
                console.log('Carregando conteúdo subcategoria');
            }
        })
        .done(function (response) {
            console.log(response);                    
        });        
    }    

    $('#subcategories').on('change', function(){
        var slugCategory = $('#categories').find(':selected').attr('data-slug');
        var slugSubCat = $('#subcategories').find(':selected').attr('data-slug');
        listContentSubcat(slugCategory, slugSubCat);
    });

});