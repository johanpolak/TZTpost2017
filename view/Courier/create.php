<form>
    <div id="personalia" class="col-sm-12">
        <div class="sub-header">
            Persoonsgegevens
        </div>
        <div class="col-sm-6">
            <div class="form-horizontal">
                <?php $this->template('createAccountBase1'); ?>
            </div>
        </div>
        <div class="col-sm-6">
            <?php $this->template('createAccountBase2'); ?>
        </div>
    </div>

    <div class="col-xs-12"><hr></div>

    <div id="CompanyData" class="col-sm-12">
        <div class="col-sm-6">
            <div class="form-horizontal">
                <div class="form-group">        
                    <label class="control-label col-sm-6" for="CV">Curriculum Vitae</label>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="btn btn-default">
                                    Selecteer bestand <input type="file" style="display: none;" multiple>
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
                                    Selecteer bestand <input type="file" style="display: none;" multiple>
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
                                    Selecteer bestand <input type="file" style="display: none;" multiple>
                                </span>
                            </label>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="PaymentData" class="col-sm-12">
        <div class="col-sm-6">
            <div class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-sm-6" for="AccountNumber">Rekeningnummer</label>
                    <?php $this->input('text', 'AccountNumber', false, null, true); ?>
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
        <button type="button" class="btn btn-default Registrate">Registreren</button>
    </div>
</form>