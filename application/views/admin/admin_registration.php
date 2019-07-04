<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
<title>admin Registration form</title>
<style type="text/css">
body{
  background-color: #3EB650;
}
</style>
</head>

<body>
<h1>You don't have accout yet? register youself.</h1>


 <form method="post">
 <table width="600" align="center" border="1" cellspacing="5" cellpadding="5">
 <tr>
 <td colspan="2"><?php echo @$error; ?></td>
 </tr>
  <tr>
    <td width="230">Name </td>
    <td width="329"><input type="text" name="name"/></td>
  </tr>

  <tr>
    <td>Email </td>
    <td><input type="text" name="email"/></td>
  </tr>

  <tr>
    <td>Password </td>
    <td><input type="password" name="pass"/></td>
  </tr>





  <tr>
    <td colspan="2" align="center">
 <input type="submit" name="register" value="Register Me"/></td>
 <span class="float-center"><a href="<?= base_url() . 'index.php/admin/register'; ?>" class="btn btn-primary"><h1>you already have an account? click here to login <h1></a></span>
  </tr>
</table>

 </form>


</body>
</html>
