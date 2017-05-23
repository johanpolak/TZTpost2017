<form class="form-horizontal" action="index" method="Post">
    <div class="form-group">
        <label class="col-sm-4 control-label">Email</label>
        <?php $this->input('text', 'email', $this->check['email'], 'Invalid email' , true) ?>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Password</label>
        <?php $this->input('password', 'password', $this->check['password'], 'Invalid password', true) ?>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8">
            <button type="submit" class="btn btn-default">Login</button>
        </div>
    </div>
</form>