
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










</body>
</html>
