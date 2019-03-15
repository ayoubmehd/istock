$(function () {

    var panierProduits = $('.produits-panier'),
        panierList = [];


        $('#content').on('click', '.to-panier', function () { 
        
        var btn = $(this);
        var res = false;


        panierProduits.children().each(function (i) {
           
            res = btn.parent().parent().find('.produitListing').val() == $(this).find('.produitPanier').val();
            console.log('Res : ',res, 'Index : ', i, 'lenght : ', $(this).parent().lenght);

                
           

        });

        $('.clear-btn').click(function() { 

            panierProduits.children().find('.close').click();
            console.log('Clear BTN : ', panierProduits.children());

        });

        if(!res) {

            var openTagCard = `
            <div class="card">
                <input name="IdP[]" type="hidden" value="` + btn.parent().parent().find('.produitListing').val() + `" class="produitPanier">
                <div class="card-header">
                    <button type="button" class="close" aria-label="Close">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="label" for="Qtt">Quantité</label>
                        <input class="form-control" id="Qtt" name="Qtt[]" type="number">
                        <input type="hidden" name="PrixHT[]" value="` + btn.siblings('.prixP').text() + `">
                    </div>
            `;


            panierProduits
            .append(
                openTagCard +
                '<h4 class="card-title">' +
                btn.siblings('.nomP').text() +
                '</h4><p class="card-text">' +
                btn.siblings('.remarqueP').text() +
                '</p><p class="card-text">' +
                btn.siblings('.prixP').text() +
                '</p></div></div>'
            );

        }

    //remove from panier


        $('.close').click(function () { 

            $(this).parent().parent().remove();

        });
    });

});