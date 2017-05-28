<div class="container">
    <form>
        <div id="PackageData" class="col-sm-12">
            <div class="sub-header">
                Pakketgegevens
            </div>
            <div class=" col-sm-12 col-md-6 form-horizontal">
                <div class="form-group">
                    <label class="control-label col-sm-6" for="Mass">Gewicht (kg) 
                        <?php $this->addInfoTooltip("Maximaal 25 kg"); ?>
                    </label>
                    <div class = "col-sm-6">
                        <input type="text" class="form-control" id="mass" name="mass">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-6" for="Size">Afmeting (cm)
                        <?php $this->addInfoTooltip("Maximale afmeting 176 x 78 x 58 cm"); ?>
                    </label>
                    <div class = "col-sm-6">
                        <div class="col-xs-4 NoPadding">
                            <input type="text" class="form-control col-sm-4" id="width" name="size" placeholder="Breedte">
                        </div>
                        <div class="col-xs-4 NoPadding">
                            <input type="text" class="form-control col-sm-4" id="height" name="size" placeholder="Hoogte">
                        </div>
                        <div class="col-xs-4 NoPadding">
                            <input type="text" class="form-control col-sm-4" id="depth" name="size" placeholder="Diepte">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12"><hr></div>

        <div id="PickUpData" class="col-sm-12">
            <div class="sub-header">
                Afhalen
            </div>
            <div class="form-group">
                <div class="checkbox CheckboxWithPaddingLeft">
                    <label><input type="checkbox" id="MyAddress" value="" onclick="document.getElementById('PickUpZipCode').disabled = this.checked; document.getElementById('PickUpHousenumber').disabled = this.checked;">Gebruik mijn adres als afhaaladres</label>
                </div>
            </div>
            <div class="form-horizontal">
                <div class="form-group col-sm-6">
                    <label class="control-label col-sm-6" for="PickUpZipCode">Postcode</label>
                    <?php $this->input('text', 'PickUpZipCode', false, null, true); ?>
                </div>
                <div class="form-group col-sm-6">
                    <label class="control-label col-sm-6" for="PickUpHousenumber">Huisnummer</label>
                    <?php $this->input('text', 'PickUpHousenumber', false, null, true); ?>
                </div>
            </div>
            <div class="form-horizontal">
                <div class="form-group col-sm-6">
                    <div class="col-md-offset-6 col-md-6 col-sm-12">
                        <input type="text" class="form-control" id="PickUpAdress disabledInput" name="PickUpAddress" placeholder="Adres" disabled>
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <div class="col-md-offset-6 col-md-6 col-sm-12">
                        <input type="text" class="form-control" id="PickUpCity disabledInput" name="PickUpCity" placeholder="Plaats" disabled>
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label class="control-label col-sm-6" for="PickUpDate">Datum
                        <?php $this->addInfoTooltip("Als het pakket voor 15:00 aangemeld is, kan het dezelfde dag nog opgehaald worden"); ?>
                    </label>
                    <?php $this->input('date', 'PickUpDate', false, null, true); ?>
                </div>
            </div>
        </div>

        <div class="col-xs-12"><hr></div>

        <div id="DeliveryData" class="col-sm-12">
            <div class="sub-header">
                Bezorgen
            </div>
            <div class="form-horizontal col-sm-12 NoPadding">
                <div class="form-group col-sm-6">
                    <label class="control-label col-sm-6" for="Addressee">Geadresseerde</label>
                    <?php $this->input('text', 'Addressee', false, null, true); ?>
                </div>
            </div>
            <div class="form-horizontal">
                <div class="form-group col-sm-6">
                    <label class="control-label col-sm-6" for="DeliveryZipCode">Postcode</label>
                    <?php $this->input('text', 'DeliveryZipCode', false, null, true); ?>
                </div>
                <div class="form-group col-sm-6">
                    <label class="control-label col-sm-6" for="DeliveryHouseNumber">Huisnummer</label>
                    <?php $this->input('text', 'DeliveryHousenumber', false, null, true); ?>
                </div>
            </div>
            <div class="form-horizontal">
                <div class="form-group col-sm-6">
                    <div class="col-md-offset-6 col-md-6 col-sm-12">
                        <input type="text" class="form-control" id="DeliveryAdress disabledInput" name="DeliveryAddress" placeholder="Adres" disabled>
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <div class="col-md-offset-6 col-md-6 col-sm-12">
                        <input type="text" class="form-control" id="DeliveryCity disabledInput" name="DeliveryCity" placeholder="Plaats" disabled>
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label class="control-label col-sm-6" for="DeliveryDate">Datum
                        <?php $this->addInfoTooltip("Als het pakket voor 15:00 aangemeld is, kan het dezelfde dag nog bezorgd worden"); ?>
                    </label>
                    <?php $this->input('date', 'DeliveryDate', false, null, true); ?>
                </div>
            </div>
        </div>

        <div class="">
            <a href="" class="btn btn-default BottomButton" role="button">Naar betalen</a>
        </div>
        <div class="">
            <a href="<?php echo URL ?>index" class="btn btn-default BottomButton" role="button">Terug</a>
        </div>
    </form>
</div>