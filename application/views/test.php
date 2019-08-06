<!DOCTYPE html>
<html lang="en">
  <head>
  </head>
  <body>


    <h4>Display Records From Database Using Codeigniter</h4>
    <table>
     <tr>
      <td><strong>question</strong></td>
      <td><strong>choice1</strong></td>
      <td><strong>choice2</strong></td>
      <td><strong>choice3</strong></td>
      <td><strong>answer</strong></td>




    </tr>
     <?php foreach($tests as $post){?>
     <tr>
         <td><?php echo $post->question;?></td>
         <td><?php echo $post->choice1;?></td>
         <td><?php echo $post->choice2;?></td>
         <td><?php echo $post->choice3;?></td>
         <td><?php echo $post->answer;?></td>
      </tr>
     <?php }?>
   </table>


  </body>
</html>
