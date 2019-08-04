<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!--
<!doctype html>
<html>
 <body>

   <?php echo validation_errors(); ?>

   <form method='post' action='<?= base_url(); ?>'>

     <table>
       <tr>
         <td>question</td>
         <td><input type='text' name='txt_question' placeholder="question"></td>
       </tr>
       <tr>
         <td>choice 1</td>
         <td><input type='text' name='txt_choice1' placeholder="choice1"></td>
       </tr>

       <tr>
         <td>choice 2</td>
         <td><input type='text' name='txt_choice2' placeholder="choice2"></td>
       </tr>
       <tr>
         <td>choice 3</td>
         <td><input type='text' name='txt_choice3' placeholder="choice3"></td>
       </tr>
       <tr>
         <td>answer</td>
         <td><input type='text' name='txt_answer' placeholder="answer"></td>
       </tr>
       <tr>
         <td>&nbsp;submit</td>
         <td><input type='submit' name='submit' value='Submit'></td>
       </tr>
    </table>

   </form>
 </body>
</html>
-->


<html>
<head>
<title>My Form</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open('form'); ?>

<h5>question</h5>
<input type="text" name="question" value="<?php echo set_value('question'); ?>" size="50" />

<h5>choice1</h5>
<input type="text" name="choice1" value="<?php echo set_value('choice1'); ?>" size="50" />

<h5>choice2</h5>
<input type="text" name="choice2" value="<?php echo set_value('choice3'); ?>" size="50" />

<h5>choice3</h5>
<input type="text" name="choice3" value="<?php echo set_value('answer'); ?>" size="50" />

<h5>answer</h5>
<input type="text" name="answer" value="" size="50" />

<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>
