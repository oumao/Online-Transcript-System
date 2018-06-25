<?php include 'database.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Transcript System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-wdth, initial-scale=1.0">
	<link rel="stylesheet" href="/Transcript_System/bootstrap/dist/css/bootstrap.min.css" style="text/css">
	<link rel="stylesheet" type="text/css" href="/Transcript_System/fontawesome/web-fonts-with-css/css/fontawesome-all.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body class="student-body">
<div class="container">
		<form class="form-horizontal" role="form">
			<p class="alert alert-primary">Enter Your Details Here</p>
			<label>Admission number</label>
				<input name="admission_no" type="text" class="form-control" required="required"><br>
			<label>Year of Study</label><br>
				<select class="form-control">
						<option>First Year</option>
						<option>Second Year</option>
						<option>Third Year</option>
						<option>Fourth Year</option>		
				</select><br>
			<label>Course</label>
				<input name="course" type="text" class="form-control" value="example Bsc Abc" required="required"><br>
			<button class="btn btn-success btn-medium">Search &nbsp;<i class="fas fa-search"></i></button><br><br>
				<a href="/Transcript_System/index.php" class="alert-link_stud" style=""><i class="fas fa-home"></i>Back to Homepage</a>
		</form>
		<footer class="footer_stud">
				Ouma &copy; 2018
		</footer>
</div>
</body>
</html>