<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Action</title>
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
	<?php
		include("connection.php");
		if(isset($_POST['done'])) {
			$name = mysqli_escape_string($connection, $_POST['name']);
			$surname = mysqli_escape_string($connection, $_POST['surname']);
			$email = mysqli_escape_string($connection, $_POST['email']);

			$result = "INSERT INTO users(name, surname, email) VALUES('{$name}', '{$surname}', '{$email}')";
			mysqli_query($connection, $result);
			exit();
		}
	?>

	<?php
			if(isset($_POST['display'])) {
				include("connection.php");
				$sql = "SELECT * FROM users";
				$query = mysqli_query($connection, $sql);
				// Loop for displaying received data
				?>
				<table class="table">
				<tr>
					<th>id</th>
					<th>name</th>
					<th>surname</th>
					<th>email</th>
					<th colspan="2">action</th>
				</tr>
				<?php
				while($row = mysqli_fetch_array($query)) {
				?>
				
					<tr>
						<td><?= $row['id'] ?></td>
						<td><?= $row['name'] ?></td>
						<td><?= $row['surname'] ?></td>
						<td><?= $row['email'] ?></td>
						<td>
							<span class="action">
								<a href="#"  title="Delete" class="delete" id="<?= $row['id'] ?>">Delete</a>
							</span>
						</td>
						<td>
							<span class="action update">
								<a href="#"  title="Update" class="<?= $row['id'] ?> update-user">Update</a>
							</span>
						</td>
						<?php
						}
						?>
					</tr>
				</table>
				<?php
				exit();
			}
	?>
	
	<?php
		// delete selected user
		include("connection.php");
		if(isset($_POST['id'])) {
			$id = mysqli_real_escape_string($connection, $_POST['id']);
			$delete = "DELETE FROM users WHERE id=".$id;
			mysqli_query($connection, $delete);
			exit();
		}
	?>
	
	<?php
	// updating data
	include("connection.php");
		if(isset($_POST['updone'])){
			$updatedName = mysqli_escape_string($connection, $_POST['name']);
			$updatedSurname = mysqli_escape_string($connection, $_POST['surname']);
			$updatedEmail = mysqli_escape_string($connection, $_POST['email']);
			$updatedid = mysqli_escape_string($connection, $_POST['updateid']);
			$update = "UPDATE users SET name='$updatedName', surname='$updatedSurname', email='$updatedEmail' WHERE id = $updatedid";
			mysqli_query($connection, $update);
			exit();
		}
	?>
</body>
</html>