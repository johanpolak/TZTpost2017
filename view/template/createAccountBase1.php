<div class="form-group">
    <label class="control-label col-sm-6" for="FirstName">Voornaam</label>
    <?php $this->input('text', 'FirstName', false, null, true);?>
</div>
<div class="form-group">
    <label class="control-label col-sm-6" for="pwd">Tussenvoegsel(s)</label>
    <?php $this->input('text', 'Insertion', false);?>
</div>
<div class="form-group">        
    <label class="control-label col-sm-6" for="LastName">Achternaam</label>
    <?php $this->input('text', 'LastName', false, null, true);?>
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
    <?php $this->input('date', 'BirthDate', false, null, true);?>
</div>
<div class="form-group">        
    <label class="control-label col-sm-6" for="Password">Wachtwoord</label>
    <?php $this->input('password', 'Password', false, null, true);?>
</div>
<div class="form-group">        
    <label class="control-label col-sm-6" for="RepeatPassword">Herhaal wachtwoord</label>
    <?php $this->input('password', 'RepeatPassword', false, null, true);?>
</div>