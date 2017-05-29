$(function () {
    $(document).on("keyup", "#huisnummer", function (event) {
        checkVars(this.closest('form'));
    });
    
    $(document).on("keyup", "#postcode", function (event) {
        checkVars(this.closest('form'));
    });
});

function checkVars(form){
    var huisnummer = form.huisnummer.value;
    var postcode = form.postcode.value.replace(/\s/g,'').toUpperCase();
    var reg = RegExp(/^[0-9]{4}[a-z]{2}$/gi);
    
    if(reg.test(postcode) && $.isNumeric(huisnummer)){
        postcodeApi(huisnummer, postcode);
    }
}

function postcodeApi(streetnumber, postcode) {
    $.ajax({
        url: "https://www.consor.nl/api/postcode.php",
        data: "streetnumber=" + streetnumber + "&postcode=" + postcode,
        cache: false,
        dataType: "json",
        success: function (t) {
            if (t.status == "ok") {
                $('#adres').val(t.details[0]['straat']);
                $('#woonplaats').val(t.details[0]['plaats']);
                $('#provincie').val(t.details[0]['provincie']);
                $('#land').val('NEDERLAND');
                //$('#Huisnummer').parent().removeClass('has-error has-feedback');
                //$('#Postcode').parent().removeClass('has-error has-feedback');
            } else {
                //$('#Huisnummer').parent().addClass('has-error has-feedback');
                //$('#Postcode').parent().addClass('has-error has-feedback');
                $('#adres').val('');
                $('#woonplaats').val('');
                $('#provincie').val('');
                $('#land').val('');
            }
        },
        error: function (t, o, n) {
            $('#adres').val('');
            $('#woonplaats').val('');
            $('#provincie').val('');
            $('#land').val('');
        }
    });
}

