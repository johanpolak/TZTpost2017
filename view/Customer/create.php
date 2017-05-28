<div class="container">
    <form>
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
                                <option value="Private">Particulier</option>
                                <option value="Business">Zakelijk</option>
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
                        <label class="control-label col-sm-6" for="CompanyName">Bedrijfsnaam</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="CompanyName" name="CompanyName">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-6" for="KvKNumber">KvK nummer</label>
                        <div class="col-sm-6">          
                            <input type="text" class="form-control" id="KvKNumber" name="KvKNumber">
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
                        <?php $this->input('text', 'AccountNumber', false, null, true); ?>
                    </div>
                    <div class="form-group">
                        <div class="checkbox CheckboxWithPaddingLeft">
                            <label><input type="checkbox" value="">Ik accepteer de algemene voorwaarden van TZT post</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">          
            <a href="<?php echo URL ?>index" class="btn btn-default BottomButton" role="button">Annuleren</a>
        </div>
        <div class="">          
            <a href="#" class="btn btn-default BottomButton" role="button">Registreren</a>
        </div>
    </form>
</div>