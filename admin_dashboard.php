<?php
	@session_start();
	include "class_admin.php";
/*
	Admin
	-add strudents
	add cousrses
*/
	$admin = new admin($_SESSION['logged_in_user']);

	echo "Admin Name : ".$admin->username;
	echo "Admin id : ".$admin->id;

	$admin->addStudentsBtn();

?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
</head>
<body>
<div class="container">
	
</div>
</body>
</html>