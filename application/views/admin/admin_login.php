
<div class="container">
    <h1>Admin Login</h1>
    <?php
    if($error = $this->session->flashdata('login_failed')){  ?>

    <div class="alert alert-danger alert-dismissable">
        <?= $error ?>
    </div>

    <?php
    }
    ?>
    <form class="form-horizontal" action="<?php echo base_url('admin/admin_login'); ?>" method="post">
        <div class="form-group">
            <span> <?php echo form_error('username',"<span class='text-danger'>","</span>"); ?> </span>
            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" id="inputEmail" placeholder="username" name="username" value="<?php echo set_value('username'); ?>">
            </div>
        </div>
        <div class="form-group">
            <span> <?php echo form_error('password',"<span class='text-danger'>","</span>"); ?> </span>
            <label for="inputPassword" class="col-lg-2 control-label">Password</label>
            <div class="col-lg-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password" value="<?php echo set_value('username'); ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

</div>
