$(function () {

    var myForm = $('form.produit');
    var mySelect = myForm.find('select[name="IdC"]');


    console.log('Cancel',$('.modal-footer button[data-dismiss="modal"]'));
    console.log('Close Icon', $('.modal.fade .close'));

    $("button[data-target='#Achat']").click(function () {
        console.log($(this).data('client'));

        myForm.find('input[name="IdP"]').val($(this).data('client'));

        //var response = $.ajax();
        var response = '';

        $.get('Clientc/getClients', function (data, status) {
            if(status == 'success') {

                response = data;

            }
           // console.log(response);

            resJson = JSON.parse(response);

            mySelect.append('<option disabled value="" selected>Coisire Le client</option>');
            for(var i = 0; i < resJson.length; i++) {

                console.log(resJson[i].CinC);

                mySelect.append('<option value="' + resJson[i].CinC + '">' + resJson[i].NomC + '</option>');
            }

        });

       // var jsonRes = JSON.parse(response);


    });

    $('.modal.fade .close').click(function () {

        mySelect.html('');

        console.log(mySelect);

    });

    $('.modal-footer button[data-dismiss="modal"]').click(function () {

        mySelect.html('');

        console.log(mySelect);

    });

});