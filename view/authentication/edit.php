<form method="post" action="edit" class="container" enctype="multipart/form-data">
    <div class="form-horizontal ">
        <div class="sub-header">
            Profiel
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label col-sm-6" for="Type">Soort account</label>
                <div class="col-sm-6">
                    <select class="form-control" name="Type">
                        <option value="0" <?php echo (isset($this->data['Type']) && $this->data['Type'] == 0 ? 'selected' : '') ?>>Klant</option>
                        <option value="1" <?php echo (isset($this->data['Type']) && $this->data['Type'] == 1 ? 'selected' : '') ?>>Koerier</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-6">Voornaam</label>
                <?php $this->input('text', 'FirstName', (isset($this->check[1]) ? $this->check[1] : true), 'Dit veld is verplicht!', true, (isset($this->data['FirstName']) ? $this->data['FirstName'] : null), $class = false) ?>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-6">Tussenvoegsel(s)</label>
                <?php $this->input('text', 'Middlename', (isset($this->check[2]) ? $this->check[2] : true), 'Dit veld is verplicht!', true, (isset($this->data['Middlename']) ? $this->data['Middlename'] : null), $class = false) ?>
            </div>
            <div class="form-group">        
                <label class="control-label col-sm-6" for="LastName">Achternaam</label>
                <?php $this->input('text', 'LastName', (isset($this->check[3]) ? $this->check[3] : true), 'Dit veld is verplicht!', true, (isset($this->data['LastName']) ? $this->data['LastName'] : null), $class = false) ?>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-6" for="Gender">Geslacht</label>
                <div class="col-sm-6">
                    <select class="form-control" name="Gender">
                        <option value="Male" <?php echo (isset($this->data['Gender']) && $this->data['Gender'] === "Male" ? 'selected' : '') ?>>Man</option>
                        <option value="Female" <?php echo (isset($this->data['Gender']) && $this->data['Gender'] === "Female" ? 'selected' : '') ?>>Vrouw</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-6" for="BirthDay">Geboortedatum</label>
                <?php $this->input('date', 'BirthDate', (isset($this->check[5]) ? $this->check[5] : true), 'Vul een datum in!', true, (isset($this->data['BirthDay']) ? $this->data['BirthDay'] : null), $class = false) ?>
            </div>
            <div class = "form-group">
                <label class = "control-label col-sm-6">Huisnummer</label>
                <?php $this->input('number', 'huisnummer', (isset($this->check[8]) ? $this->check[8] : true), 'Vul alleen cijfers in!', true, (isset($this->data['huisnummer']) ? $this->data['huisnummer'] : null), $class = false) ?>
            </div>
            <div class = "form-group">
                <label class = "control-label col-sm-6">Toevoeging</label>
                <?php $this->input('text', 'addition', (isset($this->check[9]) ? $this->check[9] : true), null, false, (isset($this->data['addition']) ? $this->data['addition'] : null), $class = false) ?>
            </div>
        </div>
        <div class="col-sm-6">
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
        </div>
        <div id="customer" >
            <div class="sub-header">
                Klant
            </div>
            <div class="col-sm-12">
                <div class="form-group">        
                    <label class="control-label col-sm-6" for="AccountType">Accounttype</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="AccountType">
                            <option value="0" <?php echo (isset($this->data['AccountType']) && $this->data['AccountType'] === "0" ? 'selected' : '') ?>>Particulier</option>
                            <option value="1" <?php echo (isset($this->data['AccountType']) && $this->data['AccountType'] === "1" ? 'selected' : '') ?>>Zakelijk</option>
                        </select>
                    </div>
                </div>
                <div id="company">
                    <div class="form-group">
                        <label class="control-label col-sm-6">Bedrijfsnaam</label>
                        <?php $this->input('text', 'CompanyName', (isset($this->check[16]) ? $this->check[16] : true), $erromssg = null, false, (isset($this->data['CompanyName']) ? $this->data['CompanyName'] : null), $class = false) ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6" for="KvKNumber">KvK nummer</label>
                        <?php $this->input('text', 'KvKNumber', (isset($this->check[17]) ? $this->check[17] : true), $erromssg = null, $required = false, (isset($this->data['KvKNumber']) ? $this->data['KvKNumber'] : null), $class = false) ?>
                    </div>
                    <div class="form-group">        
                        <label class="control-label col-sm-6" for="Photo">KvK uitreksel</label>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <label class="input-group-btn">
                                    <span class="btn btn-default">
                                        Selecteer bestand <input type="file" name="kvk" style="display: none;" multiple>
                                    </span>
                                </label>
                                <input type="text" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">  
                    <label class="control-label col-sm-6" for="PaymentPreference">Betalingsvoorkeur</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="PaymentPreference">
                            <option value="Invoice" <?php echo (isset($this->data['PaymentPreference']) && $this->data['PaymentPreference'] === "Invoice" ? 'selected' : '') ?>>Factuur</option>
                            <option value="Automatic" <?php echo (isset($this->data['PaymentPreference']) && $this->data['PaymentPreference'] === "Automatic" ? 'selected' : '') ?>>Automatisch incasso</option>
                            <option value="AfterPay" <?php echo (isset($this->data['PaymentPreference']) && $this->data['PaymentPreference'] === "AfterPay" ? 'selected' : '') ?>>Achteraf betalen</option>
                            <option value="Ideal" <?php echo (isset($this->data['PaymentPreference']) && $this->data['PaymentPreference'] === "Ideal" ? 'selected' : '') ?>>iDEAL</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-6" for="AccountNumber">Rekeningnummer</label>
                    <?php $this->input('text', 'AccountNumber', (isset($this->check[19]) ? $this->check[19] : true), $erromssg = null, $required = false, (isset($this->data['AccountNumber']) ? $this->data['AccountNumber'] : null), $class = false) ?>
                </div>
            </div>
        </div>

        <div id="courier">
            <div class="sub-header">
                Koerier
            </div>
            <div class="col-sm-12">
                <div class="form-group">        
                    <label class="control-label col-sm-6" for="CV">Curriculum Vitae</label>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="btn btn-default">
                                    Selecteer bestand <input type="file" name="cv" style="display: none;" multiple>
                                </span>
                            </label>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-group">        
                    <label class="control-label col-sm-6" for="Photo">Foto</label>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="btn btn-default">
                                    Selecteer bestand <input type="file" name="foto" style="display: none;" multiple>
                                </span>
                            </label>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-group">        
                    <label class="control-label col-sm-6" for="CopyIdentification">Kopie identiteitsbewijs</label>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="btn btn-default">
                                    Selecteer bestand <input type="file" name="id" style="display: none;" multiple>
                                </span>
                            </label>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">
                <label  class="control-label col-sm-12"><input type="checkbox" value="" required> Ik accepteer de algemene voorwaarden van TZT post</label>
            </div>
            <input type="submit" value="Opslaan" class="btn btn-primary pull-right"/>
        </div>
    </div>
</form>
<script>
    $(function () {
        if ($('[name="AccountType"]').val() == 0) {
            $('#company').hide();
        }
        if ($('[name="Type"]').val() == 0) {
            $('#courier').hide();
        } else {
            $('#customer').hide();
        }

        $(document).on('change', '[name="Type"]', function () {
            $('#customer').toggle();
            $('#courier').toggle();
        })
        $(document).on('change', '[name="AccountType"]', function () {
            $('#company').toggle();
        })
    });
</script>