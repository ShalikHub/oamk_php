<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!doctype html>
<html>
 <body>
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
