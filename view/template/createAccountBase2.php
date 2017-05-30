<div class = "form-horizontal"> 
    <div class = "form-group">
        <label class = "control-label col-sm-6">Huisnummer</label>
        <?php $this->input('number', 'huisnummer', (isset($this->check[8]) ? $this->check[8] : true), 'Vul alleen cijfers in!', true, (isset($this->data['huisnummer']) ? $this->data['huisnummer'] : null), $class = false) ?>
    </div>
    <div class = "form-group">
        <label class = "control-label col-sm-6">Toevoeging</label>
        <?php $this->input('text', 'addition', (isset($this->check[9]) ? $this->check[9] : true), null, false, (isset($this->data['addition']) ? $this->data['addition'] : null), $class = false) ?>
    </div>
    <div class = "form-group">
        <label class = "control-label col-sm-6">Postcode</label>
        <?php $this->input('text', 'postcode', (isset($this->check[10]) ? $this->check[10] : true), 'Vul een geldig postcode in!', true, (isset($this->data['postcode']) ? $this->data['postcode'] : null), $class = false) ?>
    </div>
    <div class = "form-group">
        <label class = "control-label col-sm-6">Adres</label>
        <?php $this->input('text', 'street', (isset($this->check[11]) ? $this->check[11] : true), $erromssg = null, true, (isset($this->data['street']) ? $this->data['street'] : null), $class = false, 'readonly') ?>
    </div>
    <div class = "form-group">
        <label class = "control-label col-sm-6">Woonplaats</label>
        <?php $this->input('text', 'city', (isset($this->check[12]) ? $this->check[12] : true), $erromssg = null, true, (isset($this->data['city']) ? $this->data['city'] : null), $class = false, 'readonly') ?>
    </div>
    <div class="form-group">
        <label class = "control-label col-sm-6">Provincie</label>
        <?php $this->input('text', 'state', (isset($this->check[13]) ? $this->check[13] : true), $erromssg = null, true, (isset($this->data['state']) ? $this->data['state'] : null), $class = false, 'readonly') ?>
    </div>
    <div class = "form-group">
        <label class = "control-label col-sm-6">Telefoonnummer</label>
        <?php $this->input('text', 'phone', (isset($this->check[14]) ? $this->check[14] : true), 'Vul eeb geldig telefoon nummer in!', true, (isset($this->data['phone']) ? $this->data['phone'] : null), $class = false) ?>
    </div>
    <div class = "form-group">
        <label class = "control-label col-sm-6">Emailadres</label>
        <?php $this->input('email', 'email', (isset($this->check[15]) ? $this->check[15] : true), 'Vul een geldig e-mail adres in!', true, (isset($this->data['email']) ? $this->data['email'] : null), $class = false) ?>
    </div>
</div>