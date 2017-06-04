<a href="#" class="btn btn-default">Terug</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Vertrekstation</th>
            <th>Aankomststation</th>
            <th>Structueel</th>
            <th>Vertrektijd</th>
            <th>Eenmalig</th>
            <th>Datum</th>
            <th>Alle</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($this->data) && !empty($this->data)) {
            foreach ($this->data as $key => $value) {
                echo '<tr></tr>';
            }
        }
        ?>
    </tbody>
</table>
<a href="<?php echo URL ?>availability/create" class="btn btn-default">Regel toevoegen</a>
