<form method="post" action="/courier/add" class="container" enctype="multipart/form-data">
    <div class="form-horizontal ">
        <div class="sub-header">
            Bescikbaarheid
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label col-sm-6">Vertrekstation</label>
                <?php $this->input('text', 'From_idStation', (isset($this->check[1]) ? $this->check[1] : true), 'Dit veld is verplicht!', true, (isset($this->data['From_idStation']) ? $this->data['From_idStation'] : null), $class = false) ?>
            </div>
        </div>

        <div class="col-sm-6">
            <div class = "form-group">
                <label class = "control-label col-sm-6">Aankomststation</label>
                <?php $this->input('text', 'To_idStation', (isset($this->check[10]) ? $this->check[10] : true), 'Vul een geldig postcode in!', true, (isset($this->data['To_idStation']) ? $this->data['To_idStation'] : null), $class = false) ?>
            </div>
        </div>

        </hr>

        <div class="col-sm-12">
            <div class="form-group">
                <label  class="control-label col-sm-12"><input type="checkbox" name="EverythingFromStation" value=""> Toon mij alle opdrachten vanaf dit vertrekstation</label>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">
                <label  class="control-label col-sm-12"><input type="checkbox" name="Structural" value=""> Structueel</label>
            </div>
            <div class="form-group">
                <label  class="control-label col-sm-12">Dagen (meerdere mogelijk)</label>
                <div class="col-sm-12">
                    <label class="checkbox-inline ">
                        <input type="checkbox" value="ma"> Maandag
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="di"> Dinsdag
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="wo"> Woensdag
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="do"> Donderdag
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="vr"> Vrijdag
                    </label>
                </div>
            </div>
            <div class="form-group">

            </div>
        </div>

        <hr>

        <div class="col-sm-12">
            <div class="form-group">
                <label  class="control-label col-sm-12"><input type="checkbox" value=""> Eenmalig</label>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-6">Datum</label>
                <?php $this->input('date', 'TravelDate', (isset($this->check[1]) ? $this->check[1] : true), 'Dit veld is verplicht!', true, (isset($this->data['TravelDate']) ? $this->data['TravelDate'] : null), $class = false) ?>
            </div>
            <div class="form-group">
                <label  class="control-label col-sm-12">Reis</label>
                <div class="col-sm-12">
                    <label class="radio-inline">
                        <input type="radio" name="TravelType" value="Enkel"> Enkel
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="TravelType" value="Retour"> Retour
                    </label>
                </div>
            </div>
        </div>

        <hr>
        
        <div class="col-sm-12">
            <div class="form-group">
                <label  class="control-label col-sm-12"><input type="checkbox" name="EverythingTraject" value=""> Toon mij alle opdrachten op dit traject</label>
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