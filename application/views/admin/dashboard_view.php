<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <style type="text/css">
        body{
          background-color: #3EB650;
        }

        li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #555;
  color: white;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
}
        </style>
    </head>
    <body>
      <div class="container">
      <h1> Welcome In Admin Dashboard</h1>
      </div>


        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <ul>
                        <li><a href="dashboard_view.php">home</span>
                        <li><a href="home">exam menu</span>
                        <li><a href="Exam.php">create exam</span>
                        <li><a href="about.php">about</span>
                      </ul>
                    </button>
                    <a class="navbar-brand" href="admin">Admin Panel</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url ('index.php/admin/logout'); ?>">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div>
       		<button type="button">START</button>
       	 </div>

        <div class="container">
       	<div class="row">
       		<form method="post" class="form-horizontal col-md-6 col-md-offset-3" action="">
       		<h2>multiple choice exam application</h2>
       			<div class="form-group">
       			    <label for="input1" class="col-sm-2 control-label">question categories</label>
       			    <div class="col-sm-10">
       			      <input type="number" name="id"  class="form-control" id="input1" placeholder="question_id" />
       			    </div>
       			</div>

       			<div class="form-group">
       			    <label for="input2" class="col-sm-2 control-label">question</label>
       			    <div class="col-sm-10">
       			      <input type="text" name="question"  class="form-control" id="input2" placeholder="question" />
       			    </div>
       			</div>



       			<div class="form-group" class="form-group">
       			<label for="input" class="col-sm-2 control-label">options</label>
       			<div class="col-sm-10">
       			  <label>
       			    <input type="text" name="choice1" class="form-control" id="input3" > choice 1
       			  </label>
       			  	  <label>
       			    <input type="text" name="choice2" class="form-control" id="input4"> choice 2
       			  </label>

               <label>
             <input type="text" name="choice3"  class="form-control" id="input5"> choice 3
           </label>
       			</div>
       			</div>

           <div class="form-group">
             <label>
           <input type="text" name="answer"  class="form-control" id="input6"> Answer</label>
           <div class="col-sm-10">

           </div>

       			<div class="form-group">

       			<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="submit" />
       		</form>
       	</div>
       </div>


        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    </body>
</html>
