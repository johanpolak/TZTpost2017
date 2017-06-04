<<<<<<< HEAD
<form action="<?php echo $this->action ?>" method="post" enctype="multipart/form-data">
    <div id="personalia" class="col-sm-12">
        <div class="sub-header">
            Persoonsgegevens
        </div>
        <div class="col-sm-6">
            <div class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-sm-6" for="AccountType">Accounttype</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="AccountType">
                            <option value="0">Particulier</option>
                            <option value="1">Zakelijk</option>
                        </select>
                    </div>
                </div>
                <?php $this->template('createAccountBase1'); ?>
            </div>
        </div>
        <div class="col-sm-6">
            <?php $this->template('createAccountBase2'); ?>
        </div>
    </div>

    <div class="col-xs-12"><hr></div>

    <div id="CompanyData" class="col-sm-12">
        <div class="sub-header">
            Bedrijfsgegevens
        </div>
        <div class="col-sm-6">
            <div class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-sm-6">Bedrijfsnaam</label>
                    <div class="col-sm-6">
                        <?php $this->input('text', 'CompanyName', (isset($this->check[16]) ? $this->check[16] : true), $erromssg = null, false, (isset($this->data['CompanyName']) ? $this->data['CompanyName'] : null), $class = false) ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-6" for="KvKNumber">KvK nummer</label>
                    <div class="col-sm-6">
                        <?php $this->input('text', 'KvKNumber', (isset($this->check[17]) ? $this->check[17] : true), $erromssg = null, $required = false, (isset($this->data['KvKNumber']) ? $this->data['KvKNumber'] : null), $class = false) ?>
                    </div>
                </div>
                <div class="form-group">        
                    <label class="control-label col-sm-6" for="KvKFile">Uitreksel KvK</label>
                    <div class="col-sm-6">          
                        <button type="button" class="btn btn-default">Selecteer bestand</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12"><hr></div>

    <div id="PaymentData" class="col-sm-12">
        <div class="sub-header">
            Betalingsgegevens
        </div>
        <div class="col-sm-6">
            <div class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-sm-6" for="PaymentPreference">Betalingsvoorkeur</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="PaymentPreference">
                            <option value="Invoice">Factuur</option>
                            <option value="Automatic">Automatisch incasso</option>
                            <option value="AfterPay">Achteraf betalen</option>
                            <option value="Ideal">iDEAL</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-6" for="AccountNumber">Rekeningnummer</label>
                    <?php $this->input('text', 'AccountNumber', (isset($this->check[19]) ? $this->check[19] : true), $erromssg = null, $required = false, (isset($this->data['AccountNumber']) ? $this->data['AccountNumber'] : null), $class = false) ?>
                </div>
                <div class="form-group">
                    <div class="checkbox TermsAndConditions">
                        <label><input type="checkbox" value="">Ik accepteer de algemene voorwaarden van TZT post</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="">          
        <button type="button" class="btn btn-default Cancel">Annuleren</button>
    </div>
    <div class="">          
        <input type="submit" class="btn btn-default Registrate">Registreren</button>
    </div>
</form>
=======
<form action="<?php echo $this->action ?>" method="post" enctype="multipart/form-data">
    <div id="personalia" class="col-sm-12">
        <div class="sub-header">
            Persoonsgegevens
        </div>
        <div class="col-sm-6">
            <div class="form-horizontal">
                <div class="form-group">
                    
                </div>
                <?php $this->template('createAccountBase1'); ?>
            </div>
        </div>
        <div class="col-sm-6">
            <?php $this->template('createAccountBase2'); ?>
        </div>
    </div>

    <div class="col-xs-12"><hr></div>

    <div id="CompanyData" class="col-sm-12">
        <div class="sub-header">
            Bedrijfsgegevens
        </div>
        <div class="col-sm-6">
            <div class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-sm-6">Bedrijfsnaam</label>
                    <div class="col-sm-6">
                        <?php $this->input('text', 'CompanyName', (isset($this->check[16]) ? $this->check[16] : true), $erromssg = null, false, (isset($this->data['CompanyName']) ? $this->data['CompanyName'] : null), $class = false) ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-6" for="KvKNumber">KvK nummer</label>
                    <div class="col-sm-6">
                        <?php $this->input('text', 'KvKNumber', (isset($this->check[17]) ? $this->check[17] : true), $erromssg = null, $required = false, (isset($this->data['KvKNumber']) ? $this->data['KvKNumber'] : null), $class = false) ?>
                    </div>
                </div>
                <div class="form-group">        
                    <label class="control-label col-sm-6" for="KvKFile">Uitreksel KvK</label>
                    <div class="col-sm-6">          
                        <button type="button" class="btn btn-default">Selecteer bestand</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12"><hr></div>

    <div id="PaymentData" class="col-sm-12">
        <div class="sub-header">
            Betalingsgegevens
        </div>
        <div class="col-sm-6">
            <div class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-sm-6" for="PaymentPreference">Betalingsvoorkeur</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="PaymentPreference">
                            <option value="Invoice">Factuur</option>
                            <option value="Automatic">Automatisch incasso</option>
                            <option value="AfterPay">Achteraf betalen</option>
                            <option value="Ideal">iDEAL</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-6" for="AccountNumber">Rekeningnummer</label>
                    <?php $this->input('text', 'AccountNumber', (isset($this->check[19]) ? $this->check[19] : true), $erromssg = null, $required = false, (isset($this->data['AccountNumber']) ? $this->data['AccountNumber'] : null), $class = false) ?>
                </div>
                <div class="form-group">
                    <div class="checkbox TermsAndConditions">
                        <label><input type="checkbox" value="">Ik accepteer de algemene voorwaarden van TZT post</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="">          
        <button type="button" class="btn btn-default Cancel">Annuleren</button>
    </div>
    <div class="">          
        <input type="submit" class="btn btn-default Registrate">Registreren</button>
    </div>
</form>
>>>>>>> origin/hans
