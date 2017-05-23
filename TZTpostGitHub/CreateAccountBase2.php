<?php 

// tweede kolom velden huisnummer - postcode - adres - woonplaats - telefoonnummer - emailadres

echo '<form class = "form-horizontal" action = "/action_page.php"> 
    <div class = "form-group">
        <label class = "control-label col-sm-6" for = "HouseNumber">Huisnummer</label>
        <div class = "col-sm-6">
            <input type = "text" class = "form-control" id = "HouseNumber" name = "HouseNumber">
        </div>
    </div>
    <div class = "form-group">
        <label class = "control-label col-sm-6" for = "ZipCode">Postcode</label>
        <div class = "col-sm-6">
            <input type = "text" class = "form-control" id = "ZipCode" name = "ZipCode">
        </div>
    </div>
    <div class = "form-group">
        <label class = "control-label col-sm-6" for = "Address">Adres</label>
        <div class = "col-sm-6">
            <input type = "text" class = "form-control" id = "Adress disabledInput" name = "Address" disabled>
        </div>
    </div>
    <div class = "form-group">
        <label class = "control-label col-sm-6" for = "City">Woonplaats</label>
        <div class = "col-sm-6">
            <input type = "text" class = "form-control" id = "City disabledInput" name = "City" disabled>
        </div>
    </div>
    <div class = "form-group">
        <label class = "control-label col-sm-6" for = "PhoneNumber">Telefoonnummer</label>
        <div class = "col-sm-6">
            <input type = "text" class = "form-control" id = "PhoneNumber" name = "PhoneNumber">
        </div>
    </div>
    <div class = "form-group">
        <label class = "control-label col-sm-6" for = "EmailAddress">Emailadres</label>
        <div class = "col-sm-6">
            <input type = "email" class = "form-control" id = "EmailAddress" name = "EmailAddress">
        </div>
    </div>
</form>';
?>