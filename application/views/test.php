<!DOCTYPE html>
<html lang="en">
  <head>
  </head>
  <body>


    <h4>exam</h4>
    <table>
     <tr>
      <td><strong>question</strong></td>

      <td><strong>choice1</strong></td>

      <td><strong>choice2</strong></td>
      <td><strong>choice3</strong></td>
      <td><strong>answer</strong></td>




    </tr>

 <?php
 $i=1;
 foreach($tests as $row){?>
     <tr>

         <td><?php echo $row->question;?></td>

         <td><?php echo $row->choice1;?></td>

         <td><?php echo $row->choice2;?></td>

         <td><?php echo $row->choice3;?></td>

         <td><?php echo $row->answer;?></td>

      </tr>
     <?php }?>
   </table>


  </body>
</html>
