<div class="form-group">
    <label class="control-label col-sm-6">Voornaam</label>
    <?php $this->input('text', 'FirstName', (isset($this->check[1]) ? $this->check[1] : true), 'Dit veld is verplicht!', true, (isset($this->data['FirstName']) ? $this->data['FirstName'] : null), $class = false) ?>
</div>
<div class="form-group">
    <label class="control-label col-sm-6">Tussenvoegsel(s)</label>
    <?php $this->input('text', 'Insertion', (isset($this->check[2]) ? $this->check[2] : true), 'Dit veld is verplicht!', true, (isset($this->data['Insertion']) ? $this->data['Insertion'] : null), $class = false) ?>
</div>
<div class="form-group">        
    <label class="control-label col-sm-6" for="LastName">Achternaam</label>
    <?php $this->input('text', 'LastName', (isset($this->check[3]) ? $this->check[3] : true), 'Dit veld is verplicht!', true, (isset($this->data['LastName']) ? $this->data['LastName'] : null), $class = false) ?>
</div>
<div class="form-group">
    <label class="control-label col-sm-6" for="Gender">Geslacht</label>
    <div class="col-sm-6">
        <select class="form-control" name="Gender">
            <option value="Male">Man</option>
            <option value="Female">Vrouw</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-6" for="BirthDate">Geboortedatum</label>
    <?php $this->input('date', 'BirthDate', (isset($this->check[5]) ? $this->check[5] : true), 'Vul een datum in!', true, (isset($this->data['BirthDate']) ? $this->data['BirthDate'] : null), $class = false) ?>
</div>
<div class="form-group">        
    <label class="control-label col-sm-6" for="Password">Wachtwoord</label>
    <?php $this->input('password', 'Password', (isset($this->check[6]) ? $this->check[6] : true), 'Wachtwoorden komen niet overeen!', true, (isset($this->data['Password']) ? $this->data['Password'] : null), $class = false) ?>
    
</div>
<div class="form-group">        
    <label class="control-label col-sm-6" for="RepeatPassword">Herhaal wachtwoord</label>
    <?php $this->input('password', 'RepeatPassword', (isset($this->check[7]) ? $this->check[7] : true), $erromssg = null, true, (isset($this->data['RepeatPassword']) ? $this->data['RepeatPassword'] : null), $class = false) ?>
</div>