<!DOCTYPE html>
<html>
<head>
<title>admin login</title>

<style type="text/css">
body{
  background-color: #3EB650;
}
</style>

</head>

<body>
 <form class="form-horizontal" method="post">
   <?php  echo form_open('admin/Login/admin_login'); ?>
<table width="600" align="center" border="1" cellspacing="5" cellpadding="5">
 <tr>
 <td colspan="2"><?php echo @$error; ?></td>
 </tr>
  <tr>
    <td>admin name </td>

    <td><?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Username']); ?></td>

    <!--<td><input type="text" name="admin_name"/></td> -->
 </tr>

 <tr>
    <td width="230">admin password </td>
    <td><?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'password']); ?></td>
  </tr>
   <tr>

<div class="form-group">
  <div class="col-lg-10 col-lg-offset-2">
    <td colspan="2" align="center">
 <!--<button class="btn btn-primary"type="submit" name="login" value="Login"/>submit</td></button><br> -->
 <?php echo form_submit(['name'=>'submit','value'=>'login','class'=>'btn btn-primary']) ?>
 <?php echo form_reset(['name'=>'reset','value'=>'reset','class'=>'btn btn-primary']) ?>
 <!--<button type="reset" class="btn bth-default">cancel</button> -->
</div>
</div>
  </tr>
</table>

 </form>
 <span class="float-center"><a href="<?= base_url() . 'index.php/admin/login/admin_registration'; ?>" class="btn btn-primary"><h1>you haven't an account yet? click here to register <h1></a></span>
</body>
</html>
