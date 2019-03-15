$(function () {

    /*
    *
    *   Conirmation Suppression de la Produit
    *
    * */

    $('button[data-target="#confirmeSuppr"]').click(function () {

        var myLink = $('.modal-footer a'),

            newHref = myLink.attr('href') + $(this).data('id');

            console.log('Data-id', $(this).data('id'));

            myLink.attr('href', newHref);

    });

    /*
    *
    *   Reschercher
    *
    * */


    //$("#search").on("keyup", function() {
    //    var value = $(this).val();
    //
    //    $(".search tr").each(function(index) {
    //
    //        if (index != 0) {
    //
    //            var row = $(this);
    //
    //            var id = row.find("td").text();
    //
    //            //console.log('ID',id);
    //
    //            if (id.indexOf(value) != -1) {
    //                $(this).show();
    //            } else {
    //                $(this).hide();
    //            }
    //        }
    //    });
    //});

});