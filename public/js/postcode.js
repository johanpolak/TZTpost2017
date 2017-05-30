$(function () {
    $(document).on("keyup", "[name='huisnummer']", function (event) {
        checkVars(this.closest('form'));
    });
    
    $(document).on("keyup", "[name='postcode']", function (event) {
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
                $("#street").val(t.details[0]['straat']);
                $("#city").val(t.details[0]['plaats']);
                $("#state").val(t.details[0]['provincie']);
                
                $("#huisnummer").parent().removeClass('has-error has-feedback');
                $("#postcode").parent().removeClass('has-error has-feedback');
            } else {
                $("#huisnummer").parent().addClass('has-error has-feedback');
                $("#postcode").parent().addClass('has-error has-feedback');
                $("#street").val('');
                $("#city").val('');
                $("#state").val('');
            }
        },
        error: function (t, o, n) {
            $("#street").val('');
            $("#city").val('');
            $("#state").val('');
        }
    });
}

