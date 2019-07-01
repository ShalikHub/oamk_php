<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('admin/Exam'); ?>

    <label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="text">Text</label>
    <textarea name="text"></textarea><br />
    <p> please select your answer:</p>

    <input type="radio" name="age" value="30"> 0 - 30<br>
  <input type="radio" name="age" value="60"> 31 - 60<br>
  <input type="radio" name="age" value="100"> 61 - 100<br> 


    <input type="submit" name="submit" value="Create news exam" />

</form>
