<!DOCTYPE html>
<html>
<head>
<title>question creating</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<link rel="stylesheet" href="styles.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
body{
  background-color: #3EB650;
}
</style>

</style>

</head>
<body>
  <h1> Create the exam</h1>

  <form class="form-horizontal" method="post">
    <?php echo form_open('admin/Exam/create_exam');?>
  <table width="600" align="center" border="1" cellspacing="5" cellpadding="5">

    <tr>
      <td colspan="2"><?php echo @$error; ?></td>

    </tr>

    <tr>
      <td width="220" height="100">question</td>
      <td width="180" height="60" ><?php echo form_input(['name'=>'question','class'=>'form-control','placeholder'=>'question']); ?></td>

    </tr>

    <tr>
       <td width="220">choice1</td>
       <td><?php echo form_input(['name'=>'choice1','class'=>'form-control','placeholder'=>'choice1']);  ?></td>
    </tr>

    <tr>
       <td width="220">choice2</td>
       <td><?php echo form_input(['name'=>'choice2','class'=>'form-control','placeholder'=>'choice2']);  ?></td>
    </tr>

    <tr>
       <td width="220">choice3</td>
       <td><?php echo form_input(['name'=>'choice3','class'=>'form-control','placeholder'=>'choice3']);  ?></td>
    </tr>

    <tr>
       <td width="220">answer</td>
       <td><?php echo form_input(['name'=>'answer','class'=>'form-control','placeholder'=>'answer']);  ?></td>
    </tr>
    <div class="form-group">
     <div class="col-lg-10 col-lg-offset-2">
       <td colspan="2" align="center">
    <!-- <button class="btn btn-primary"type="submit" name="login" value="Login"/>submit</td></button><br> -->
    <?php echo form_submit(['name'=>'submit','value'=>'submit','class'=>'btn btn-primary']) ?>

    <!--<button type="reset" class="btn bth-default">cancel</button> -->
   </div>
   </div>
     </tr>



  </table>

</body>


</html>
