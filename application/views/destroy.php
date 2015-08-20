<html>
<head>
	<meta charset="UTF-8">
	<title>Coding Dojo Courses</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  	<style>
  		.container {
  			width: 400px;
  			margin: 20px auto;
  			text-align: center;
  		}
  		form {
  			text-align: left;
  			display: inline-block;
  		}
  		h6 {
  			text-align: left;
  		}
  		button {
  			margin: 20px;
  		}
  		input {
  			margin: 10px;
  		}
  	</style>
</head>
<body>
	<div class="container">
		<h3>Are you sure you want to delete the following course?</h3>
		<h6>Name: <strong><?php echo $name ?></strong></h6>
		<h6>Description: <strong><?php echo $description ?></strong></h6>
		<form action="/courses" method="post">
			<input type="hidden" action="action" value="cancel">
			<button type="submit" class="btn-info">No</button>
		</form>
		<form action="/courses/remove/<?php echo $id ?>" method="post">
			<input type="hidden" action="action" value="delete">
			<button id="yes" type="submit" class="btn-danger">Yes! I want to delete this</button>
		</form>
	</div>
</body>
</html>