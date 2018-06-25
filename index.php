<?php 
	require_once 'config.php';
	require_once 'database.php';
	$db = new Database($pdo);

	$row = $db->getData();

 ?>

<?php 
session_start();
if(isset($_POST['login'])){
	
	$db = new Database($pdo);

	$username = $_POST['username'];
	$password = $_POST['password'];

	$login = mysqli_query($con->con,"SELECT * FROM `admin` WHERE `password`= '{$password}' and `username`='{$username}' ")or die(mysqli_error($con->con));
	if(mysqli_num_rows($login)==1){
		//loggeg in
		$user_data = mysqli_fetch_assoc($login);
		$_SESSION['logged_in_user'] = $user_data['id'];

		header('location:admin_dashboard.php');

	}else{
		//not logged in 

		echo "retry";
	}
	
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Transcript System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-wdth, initial-scale=1.0">
	<link rel="stylesheet" href="/Transcript_System/bootstrap/dist/css/bootstrap.min.css" style="text/css">
	<link rel="stylesheet" type="text/css" href="/Transcript_System/fontawesome/web-fonts-with-css/css/fontawesome-all.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="container-fluid">
			<header>
				<h2>Welcome to Transcript System</h2>
			</header>
		<div class="section1">
			<form role="form" class="form-horizontal" method="POST" action="index.php">
				<div class="form-group">
						<h3>Admin Login</h3>
						<div class="form-group">
							<label for="username">Username:</label>
							<input type="text" name="username" class="form-control"  required><br>
						</div>
						<div class="form-group">
							<label for="password">Password:</label>
							<input type="password" name="password" class="form-control" required><br>
						</div>
						<div class="form-group">
							<button class="btn btn-primary btn-medium btn-block" name="login"><i class="fas fa-check"></i>&nbsp Sign in</button>
						</div>
				</div>
			</form>
			<div class="stud">
				<h3>For Students</h3>
				<a href="/Transcript_System/student_form.php" class="alert-link">Click Here to view Results</a>
			</div>
		</div>
		<footer class="footer_index">
				Ouma &copy; 2018
		</footer>
	</div>
	<script type="text/javascript" src=""></script>
</body>
</html>