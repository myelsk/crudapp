<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="style.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
		<h4>Simple CRUD Application</h4>
		<div id="display">

		</div>
		<div class="form-wrap">
			<div class="col-md-6">
				<h1>Create New User</h1>
					<div class="form-group">
						<label for="name">Name</label>
						<input id="name" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="surname">Surname</label>
						<input id="surname" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input id="email" type="email" class="form-control">
					</div>
					<input value="Add New User" type="submit" id="save" class="btn btn-default no-block">
			</div>
		</div>
		<!-- Form for updating users START -->
		 <div class="form-wrap">
			<div class="col-md-6">
					<h1 class="update-h1">Update for user #</h1>
					<div class="form-group">
						<label for="up-name">Name</label>
						<input id="up-name" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="up-surname">Surname</label>
						<input id="up-surname" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="update-email">Email</label>
						<input id="up-email" type="email" class="form-control">
					</div>
					<input value="Update User" type="submit" id="update" class="btn btn-default no-block">
			</div>
		</div>

		</div>
		<!-- Form for updating users END -->
	</div>

	<script src="common.js"></script>
	<script src="validation.js"></script>
</body>
</html>