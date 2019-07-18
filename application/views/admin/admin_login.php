<!DOCTYPE html>
<html>
<head>
<title>Login form</title>

<style type="text/css">
body{
  background-color: #3EB650;
}
</style>

</head>

<body>
 <form method="post">
<table width="600" align="center" border="1" cellspacing="5" cellpadding="5">
 <tr>
 <td colspan="2"><?php echo @$error; ?></td>
 </tr>
  <tr>
    <td>admin name </td>
    <td><input type="text" name="admin_name"/></td>
 </tr>

 <tr>
    <td width="230">admin password </td>
    <td width="329"><input type="password" name="admin_password"/></td>
  </tr>
   <tr>
    <td colspan="2" align="center">
 <input type="submit" name="login" value="Login"/></td>
  </tr>
</table>

 </form>
 <span class="float-center"><a href="<?= base_url() . 'index.php/admin/login/admin_register'; ?>" class="btn btn-primary"><h1>you haven't an account yet? click here to register <h1></a></span>
</body>
</html>
