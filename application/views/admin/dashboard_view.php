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
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <ul>
                        <li><a href="home">home</span>
                        <li><a href="home">exam menu</span>
                        <li><a href="exam menu">create exam</span>
                        <li><a href="about">about</span>
                      </ul>
                    </button>
                    <a class="navbar-brand" href="admin">Admin Panel</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url('logout'); ?>">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

<div class="container">
<h1> Welcome In Admin Dashboard</h1>
</div>
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    </body>
</html>
