<?php 
//Database details
$host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'transcript_system';

try{
	$pdo = new PDO('mysql:host='. $host .';db_name='.$db_name,$db_user,$db_pass);
} 
catch(PDOException $e){

	exit('couldnot connect to the Database');
}
 ?>

