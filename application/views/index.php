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
      .alert {
        text-align: center;
        max-width: 500px;
        margin: 10px auto;
      }
  	</style>
</head>
<body>

    <?php 

        if ($this->session->userdata('error'))
        {
          ?><div class="alert alert-danger">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Error!</strong>
          <?php echo $this->session->userdata('error');
          $this->session->unset_userdata('error');
        }
     ?>
  </div>
	<div class="container container-form">
		<h1>Add your course below!</h1>
		<form class="form-group" action="courses/add" method="post" role="form">
			<input class="form-control" type="hidden" action="action" value='add'>
			<input class="form-control" type='text' placeholder='Course Name' name='name' required>
			<textarea class="form-control" type='text' placeholder='Course Description' name='description'></textarea>
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
			<tbody>
	<?php 
  foreach ($id as $key => $value)
    {
      echo "<tr><td>{$id[$key]}</td><td>{$name[$key]}</td><td>{$description[$key]}</td><td>{$date[$key]}</td><td><a href=\"courses/destroy/$value\">Remove</a></td></tr>";
    }
	?>
			</tbody>
		</table>
	</div>
</body>
</html>