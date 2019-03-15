$(function () {


    $('#content').on('click','.page-link' , function (e) {

        e.preventDefault();
        $('#content').load($(this).attr('href'));
    
    });

});
    
