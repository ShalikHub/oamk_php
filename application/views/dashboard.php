
<!DOCTYPE html>
<html>
<head>
<title>Student Dashboard</title
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

</head>

<body>
 <h1>Welcome to your dashboard...</h1>

 <div class="container">
	<div class="row">
		<form method="post" class="form-horizontal col-md-6 col-md-offset-3" action="">
		<h2>Create Operation in CodeIgniter - CRUD Application</h2>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">question_id</label>
			    <div class="col-sm-10">
			      <input type="number" name="id"  class="form-control" id="input1" placeholder="question_id" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">question</label>
			    <div class="col-sm-10">
			      <input type="text" name="question"  class="form-control" id="input1" placeholder="question" />
			    </div>
			</div>



			<div class="form-group" class="radio">
			<label for="input1" class="col-sm-2 control-label">choose your answer</label>
			<div class="col-sm-10">
			  <label>
			    <input type="radio" name="gender" id="optionsRadios1" value="male" checked> choice 1
			  </label>
			  	  <label>
			    <input type="radio" name="gender" id="optionsRadios1" value="female"> choice 2
			  </label>

        <label>
      <input type="radio" name="gender" id="optionsRadios1" value="female"> choice 3
    </label>
			</div>
			</div>

			<div class="form-group">

			<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="submit" />
		</form>
	</div>
</div>










</body>
</html>
