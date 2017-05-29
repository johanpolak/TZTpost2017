<form class="form-horizontal" action="login" method="Post">
    <div class="form-group">
        <label class="col-sm-4 control-label">Email</label>
        <?php $this->input('text', 'email', true, null, true); ?>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Password</label>
        <?php $this->input('password', 'password', true, null, true) ?>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8">
            <button type="submit" class="btn btn-default">Login</button>
        </div>
    </div>
</form>
<script>
//$(function(){
//    $('form').validate();
//});
</script>