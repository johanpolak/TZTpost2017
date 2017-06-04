<div class="container">
    <form method="post" action="/package/create">
        <div id="PackageData" class="col-sm-12">
            <div class="sub-header">
                Pakketgegevens
            </div>
            <div class=" col-sm-12 col-md-6 form-horizontal">
                <div class="form-group">
                    <label class="control-label col-sm-6" for="Mass">Gewicht (kg) 
                        <?php $this->addInfoTooltip("Maximaal 25 kg"); ?>
                    </label>
                    <?php $this->input('number', 'Weight', true, 'Dit veld is verplicht!', true, (isset($this->data['Weight']) ? $this->data['Weight'] : null)); ?>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-6" for="Size">Afmeting (cm)
                        <?php $this->addInfoTooltip("Maximale afmeting 176 x 78 x 58 cm"); ?>
                    </label>
                    <div class = "col-sm-6">
                        <div class="col-xs-4 NoPadding">
                            <input type="text" class="form-control col-sm-4" id="width" name="size[]" placeholder="Breedte">
                        </div>
                        <div class="col-xs-4 NoPadding">
                            <input type="text" class="form-control col-sm-4" id="height" name="size[]" placeholder="Hoogte">
                        </div>
                        <div class="col-xs-4 NoPadding">
                            <input type="text" class="form-control col-sm-4" id="depth" name="size[]" placeholder="Diepte">
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
            <div class="form-horizontal">
                <div class="form-group col-sm-6">
                    <label class="control-label col-sm-6" for="From_Zipcode">From_Zipcode</label>
                    <?php $this->input('text', 'From_Zipcode', true, 'Dit veld is verplicht!', true, (isset($this->data['From_Zipcode']) ? $this->data['From_Zipcode'] : null)); ?>
                </div>
                <div class="form-group col-sm-6">
                    <label class="control-label col-sm-6" for="From_Housenumber">From_Housenumber</label>
                    <?php $this->input('text', 'From_Housenumber', true, 'Dit veld is verplicht!', true, (isset($this->data['From_Housenumber']) ? $this->data['From_Housenumber'] : null)); ?>
                </div>
                <div class="form-group col-sm-6">
                    <label class="control-label col-sm-6" for="From_HouseNumberAddition">From_HouseNumberAddition</label>
                    <?php $this->input('text', 'From_HouseNumberAddition', true, '', false, (isset($this->data['From_HouseNumberAddition']) ? $this->data['From_HouseNumberAddition'] : null)); ?>
                </div>
                <div class="form-group col-sm-6">
                    <label class="control-label col-sm-6" for="From_City">From_City</label>
                    <?php $this->input('text', 'From_City', true, 'Dit veld is verplicht!', true, (isset($this->data['From_City']) ? $this->data['From_City'] : null)); ?>
                </div>
                <div class="form-group col-sm-6">
                    <label class="control-label col-sm-6" for="From_Street">From_Country</label>
                    <?php $this->input('text', 'From_Street', true, 'Dit veld is verplicht!', true, (isset($this->data['From_Street']) ? $this->data['From_Street'] : null)); ?>
                </div>
                <div class="form-group col-sm-6">
                    <label class="control-label col-sm-6" for="PickUpDate">Datum
                        <?php $this->addInfoTooltip("Als het pakket voor 15:00 aangemeld is, kan het dezelfde dag nog opgehaald worden"); ?>
                    </label>
                    <?php $this->input('date', 'PickUpDate', true, null, true); ?>
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
                    <label class="control-label col-sm-6" for="To_ZipCode">To_ZipCode</label>
                    <?php $this->input('text', 'To_ZipCode', true, 'Dit veld is verplicht!', true, (isset($this->data['To_ZipCode']) ? $this->data['To_ZipCode'] : null)); ?>
                </div>
                <div class="form-group col-sm-6">
                    <label class="control-label col-sm-6" for="To_HouseNumber">To_HouseNumber</label>
                    <?php $this->input('text', 'To_HouseNumber', true, 'Dit veld is verplicht!', true, (isset($this->data['To_HouseNumber']) ? $this->data['To_HouseNumber'] : null)); ?>
                </div>
                <div class="form-group col-sm-6">
                    <label class="control-label col-sm-6" for="To_HouseNumberAddition">To_HouseNumberAddition</label>
                    <?php $this->input('text', 'To_HouseNumberAddition', true, '', false, (isset($this->data['To_HouseNumberAddition']) ? $this->data['To_HouseNumberAddition'] : null)); ?>
                </div>
                <div class="form-group col-sm-6">
                    <label class="control-label col-sm-6" for="To_City">To_City</label>
                    <?php $this->input('text', 'To_City', true, 'Dit veld is verplicht!', true, (isset($this->data['To_City']) ? $this->data['To_City'] : null)); ?>
                </div>
                <div class="form-group col-sm-6">
                    <label class="control-label col-sm-6" for="To_Street">To_Street</label>
                    <?php $this->input('text', 'To_Street', true, 'Dit veld is verplicht!', true, (isset($this->data['To_Street']) ? $this->data['To_Street'] : null)); ?>
                </div>
                <div class="form-group col-sm-6">
                    <label class="control-label col-sm-6" for="PickUpDate">Datum
                        <?php $this->addInfoTooltip("Als het pakket voor 15:00 aangemeld is, kan het dezelfde dag nog opgehaald worden"); ?>
                    </label>
                    <?php $this->input('date', 'DeliveryDate', true, null, true); ?>
                </div>
            </div>
        </div>

        <div class="">
            <input type="submit" value="Naar betalen" class="btn btn-default BottomButton"/>
    
        </div>
        <div class="">
            <a href="<?php echo URL ?>index" class="btn btn-default BottomButton" role="button">Terug</a>
        </div>
    </form>
</div>