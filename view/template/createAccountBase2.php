<div class = "form-horizontal"> 
    <div class = "form-group">
        <label class = "control-label col-sm-6" for = "HouseNumber">Huisnummer</label>
        <?php $this->input('text', 'HouseNumber', false, null, true);?>
    </div>
    <div class = "form-group">
        <label class = "control-label col-sm-6" for = "ZipCode">Postcode</label>
        <?php $this->input('text', 'ZipCode', false, null, true);?>
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
        <?php $this->input('text', 'PhoneNumber', false);?>
    </div>
    <div class = "form-group">
        <label class = "control-label col-sm-6" for = "EmailAddress">Emailadres</label>
        <?php $this->input('email', 'EmailAddress', false, null, true);?>
    </div>
</div>