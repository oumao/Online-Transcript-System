<?php include 'database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Transcript System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-wdth, initial-scale=1.0">
	<link rel="stylesheet" href="/Transcript_System/bootstrap/dist/css/bootstrap.min.css" style="text/css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="container">
			<header>
				<h2>Welcome to Transcript System</h2>
			</header>
		<div class="section1">
			<form role="form" class="form-horizontal">
				<div class="form-group">
						<h3>Admin Login</h3>
						<div class="form-group">
							<label for="username">Username:</label>
							<input type="text" name="username" class="form-control" required><br>
						</div>
						<div class="form-group">
							<label for="password">Password:</label>
							<input type="password" name="password" class="form-control" required><br>
						</div>
						<div class="form-group">
							<input type="submit" name="login" value="Sign In" class="glyphicon glyphicon-user btn btn-primary">
						</div>
				</div>
			</form>
			<div class="stud">
				<h3>For Students</h3>
				<a href="#">Click Here to view Results</a>
			</div>
		</div>
		<footer>Ouma &copy; 2018</footer>
	</div>
	<script type="text/javascript" src=""></script>
</body>
</html>