<html>
<head>
	<meta charset="UTF-8">
	<title>Coding Dojo Courses</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  	<style>
  		.container-form {
  			width: 400px;
  			vertical-align: middle;
  			text-align: center;
  		}
  		.container-table {
  			width: 800px;
  			vertical-align: middle;
  			text-align: center;
  		}
  		button {
  			float: right;
  			margin-top: 5px;
  		}
  		.form-control {
  			margin: 5px;
  		}
  		table {
  			margin: 50px auto;
  		}
  		thead {
  			background-color: gray;
  			color: white;
  			padding: 5px;
  		}
  		td {
  			padding: 5px;
  		}
  	</style>
</head>
<body>
	<div class="container container-form">
		<h1>Add your course below!</h1>
		<form class="form-group" action="course/add" method="post" role="form">
			<input class="form-control" type="hidden" action="action" value='add'>
			<input class="form-control" type='text' placeholder='Course Name'>
			<textarea class="form-control" type='text' placeholder='Course Description'></textarea>
			<button type="submit" class="btn-primary">Add</button>
		</form>
	</div>
	<div class="container container-table">
		<table class="table-responsive table-striped">
			<thead>
				<td>id</td>
				<td>Course Name</td>
				<td>Description</td>
				<td>Date Added</td>
				<td>Actions</td>
			</thead>
	<?php 
		// var_dump($courses);
		foreach($courses as $c){
			echo "<tr>";
			foreach($c as $a){
				echo "<td>" . $a . "</td>";
			}
			echo "<td><a href=\"courses/remove/$a\">Remove</a></td></tr>";
		}
	?>
		</table>
	</div>
</body>
</html>